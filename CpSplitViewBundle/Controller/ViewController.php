<?php

namespace FCS\CP\CpSplitViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FormType;

use Symfony\Component\Form\CallbackTransformer;

use FCS\CP\CpSplitViewBundle\Entity\CpLoading;
use FCS\CP\CpSplitViewBundle\Entity\CpLoadingPoSku;
use FCS\CP\CpSplitViewBundle\Entity\CpLoadingPoSkuDetail;
use FCS\CP\CpSplitViewBundle\Form\CpLoadingType;

class ViewController extends Controller
{
	

	
    public function viewAction($ref)
    {
		$em = $this->getDoctrine()->getManager();
		
		$detailRef= array();
        $repositoryCpLoading = $em->getRepository('FCSCPCpSplitViewBundle:CpLoading');	
        $detailRef = $repositoryCpLoading->findBy(array('ref' => $ref));	
        return $this->render('FCSCPCpSplitViewBundle:View:split.html.twig', array ('detailRef' =>$detailRef));
    }
	
	public function addAction($refId, $supplierInfo, $supplierCode, Request $request)
    {		
		$detailRef =  $this->getDoctrine()
		  ->getManager()
		  ->getRepository('FCSCPCpSplitViewBundle:CpLoading')
		  ->find($refId)
		;
	  
		// création du formulaire via CpLoadingType
		$form = $this->get('form.factory')->create(CpLoadingType::class, $detailRef);
 
		 // Si la requête est en POST
		if ($request->isMethod('POST')) 
		{
		  // On fait le lien Requête <-> Formulaire
		  // À partir de maintenant, la variable detailRef contient les valeurs entrées dans le formulaire
		  $form->handleRequest($request);

		  // On vérifie que les valeurs entrées sont correctes
		  if ($form->isValid()) 
		  {
			// On enregistre notre objet $detailRef dans la base de données, par exemple
			$em = $this->getDoctrine()->getManager();
			$em->persist($detailRef);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Chargement bien enregistrée.');

			// On redirige vers la page de visualisation
			return $this->redirectToRoute('fcscp_cp_split_add_homepage', array('refId' => $detailRef->getIdloading(), 'supplierInfo' => $supplierInfo, 'supplierCode' => $supplierCode));
		  }
		}
		
		# Get List Po available for supplier code
		
		$listShowAvailableSupplier = array();
		
        $repositoryCpLoadingShowAvailableSupplier = $this->getDoctrine()
		->getManager()
		->getRepository('FCSCPCpSplitViewBundle:CpLoadingShowAvailableSupplier');	
        $listShowAvailableSupplier = $repositoryCpLoadingShowAvailableSupplier->findBy(array('supplierCode' => $supplierCode));		
		
		
		# Get List PO, Sku, packings details for CP ref
		
		$listShowDetail = array();
		
        $repositoryCpLoadingShowDetail = $this->getDoctrine()
		->getManager()
		->getRepository('FCSCPCpSplitViewBundle:CpLoadingShowDetail');	
        $listShowDetail = $repositoryCpLoadingShowDetail->findBy(array('ref' => $detailRef->getRef()));		
		
		
		// On passe la méthode createView() du formulaire à la vue
		// afin qu'elle puisse afficher le formulaire toute seule
	  return $this->render('FCSCPCpSplitViewBundle:Add:add.html.twig', array('refId' => $detailRef->getIdloading(), 'form' => $form->createView(), 'supplierInfo' => $supplierInfo, 'supplierCode' => $supplierCode,  'ref' => $detailRef->getRef(), 'listShowAvailableSupplier' => $listShowAvailableSupplier, 'listShowDetail' => $listShowDetail));
    }
	
	public function updateDetailAction(Request $request, $refId, $numPo, $skuId, $numberPallet, $numberCartonPerPallet , $palletWeight, $palletFamily)
    {		
		$em = $this->getDoctrine()->getManager();	

		$detailRef = $em->getRepository('FCSCPCpSplitViewBundle:CpLoading')
		  ->find($refId)
		;
		$repositoryCpLoadingPoSku = $em->getRepository('FCSCPCpSplitViewBundle:CpLoadingPoSku');	
        $listRowInCpLoadingPoSku = $repositoryCpLoadingPoSku->findBy(array('idloading' => $detailRef->getIdloading(), 'numPo' => $numPo, 'skuId' => $skuId ));		 
	  
		if (empty($listRowInCpLoadingPoSku)) {	
		$rowCpLoadingPoSku = new CpLoadingPoSku();	
		$rowCpLoadingPoSku->setIdloading ($detailRef->getIdloading());
		$rowCpLoadingPoSku->setNumPO ($numPo);
		$rowCpLoadingPoSku->setSkuId ($skuId);
		$em->persist($rowCpLoadingPoSku);
        $em->flush();
		
        $idloadingPoSku = $rowCpLoadingPoSku->getIdloadingPoSku();		
		}
		else {  # get $idloadingPoSku from existing row from table cp_loading_po_sku
			foreach ( $listRowInCpLoadingPoSku as $rowInCpLoadingPoSku) {		
				$idloadingPoSku = $rowInCpLoadingPoSku->getIdloadingPoSku();
			}		
		}
		
	    $rowCpLoadingPoSkuDetail = new CpLoadingPoSkuDetail();	
		$rowCpLoadingPoSkuDetail->setIdloadingPoSku($idloadingPoSku);
		$rowCpLoadingPoSkuDetail->setNumberPallet($numberPallet);
		$rowCpLoadingPoSkuDetail->setNumberCartonPerPallet($numberCartonPerPallet);
		$rowCpLoadingPoSkuDetail->setPalletWeight($palletWeight);
		$rowCpLoadingPoSkuDetail->setPalletFamily($palletFamily);
		$em->persist($rowCpLoadingPoSkuDetail);
        $em->flush();

	    return $this->redirectToRoute('fcscp_cp_split_add_homepage', array('refId' => $refId, 'supplierInfo' => $skuId, 'supplierCode' => $skuId));
			
    }
	
	public function deleteDetailAction(Request $request, $refId, $skuId, $idloadingPoSkuDetail)
    {		
		$em = $this->getDoctrine()->getManager();	

		$loadingPoSkuDetail = $em->getRepository('FCSCPCpSplitViewBundle:CpLoadingPoSkuDetail')
		  ->find($idloadingPoSkuDetail)
		;
 
 		$em->remove($loadingPoSkuDetail);
        $em->flush();
	  
	    return $this->redirectToRoute('fcscp_cp_split_add_homepage', array('refId' => $refId, 'supplierInfo' => $skuId, 'supplierCode' => $skuId));
			
    }
	
	public function duplicateDetailAction(Request $request, $refId, $skuId, $idloadingPoSkuDetail)
    {		
		$em = $this->getDoctrine()->getManager();	

		$loadingPoSkuDetail = $em->getRepository('FCSCPCpSplitViewBundle:CpLoadingPoSkuDetail')
		  ->find($idloadingPoSkuDetail)
		;
 
        $duplicateIdloadingPoSku        = $loadingPoSkuDetail->getIdloadingPoSku();
        $duplicateNumberPallet          = $loadingPoSkuDetail->getNumberPallet();
		$duplicateNumberCartonPerPallet = $loadingPoSkuDetail->getNumberCartonPerPallet();
		$duplicatePalletWeight          = $loadingPoSkuDetail->getPalletWeight();
		$duplicatePalletFamily          = $loadingPoSkuDetail->getPalletFamily();
		
		
 	    $rowCpLoadingPoSkuDetail = new CpLoadingPoSkuDetail();	
		$rowCpLoadingPoSkuDetail->setIdloadingPoSku($duplicateIdloadingPoSku);
		$rowCpLoadingPoSkuDetail->setNumberPallet($duplicateNumberPallet);
		$rowCpLoadingPoSkuDetail->setNumberCartonPerPallet($duplicateNumberCartonPerPallet);
		$rowCpLoadingPoSkuDetail->setPalletWeight($duplicatePalletWeight);
		$rowCpLoadingPoSkuDetail->setPalletFamily($duplicatePalletFamily);
		
 		$em->persist($rowCpLoadingPoSkuDetail);
        $em->flush();
	  
	    return $this->redirectToRoute('fcscp_cp_split_add_homepage', array('refId' => $refId, 'supplierInfo' => $skuId, 'supplierCode' => $skuId));
			
    }
	
	
	public function updatePoSkuDetailAction(Request $request, $refId, $skuId, $idloadingPoSkuDetail)
    {		
		
		$em = $this->getDoctrine()->getManager();	

		$loadingPoSkuDetail = $em->getRepository('FCSCPCpSplitViewBundle:CpLoadingPoSkuDetail')
		  ->find($idloadingPoSkuDetail)
		;
 
 		$numberPallet = $request->request->get('numberPallet');
		$numberCartonPerPallet = $request->request->get('numberCartonPerPallet');
		$palletWeight = $request->request->get('palletWeight');
		$palletFamily = $request->request->get('palletFamily');
		$idloadingPoSku = $request->request->get('idloadingPoSku');


		$loadingPoSkuDetail->setIdloadingPoSku($idloadingPoSku);
		$loadingPoSkuDetail->setNumberPallet($numberPallet);
		$loadingPoSkuDetail->setNumberCartonPerPallet($numberCartonPerPallet);
		$loadingPoSkuDetail->setPalletWeight($palletWeight);
		$loadingPoSkuDetail->setPalletFamily($palletFamily);
		
 		$em->persist($loadingPoSkuDetail);
        $em->flush();
		
	    return $this->redirectToRoute('fcscp_cp_split_add_homepage', array('refId' => $refId, 'supplierInfo' => $skuId, 'supplierCode' => $skuId));
		
    }
		
	
}
