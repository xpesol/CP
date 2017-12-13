<?php

namespace FCS\CP\CpSplitViewBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FormType;

use FCS\CP\CpSplitViewBundle\Entity\CpLoading;
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
	
	public function addAction($ref, Request $request)
    {
			
		#$em = $this->getDoctrine()->getManager();
		
		# Get Form for $ref
        #$repositoryCpLoading = $em->getRepository('FCSCPCpSplitViewBundle:CpLoading');	
        #$detailRef = $repositoryCpLoading->findBy(array('ref' => $ref));	
      
		$detailRef =  $this->getDoctrine()
		  ->getManager()
		  ->getRepository('FCSCPCpSplitViewBundle:CpLoading')
		  ->find($ref)
		;
	  
		// création du formulaire via CpLoadingType
		//$formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $detailRef);
		$form = $this->get('form.factory')->create(CpLoadingType::class, $detailRef);

		//$formBuilder
		//->add('ref', TextType::class)
		//->add('loadingAddress', TextareaType::class)
		//->add('loadingContact', TextType::class)
		//->add('deliveryContact', TextareaType::class)
		//->add('remarks', TextareaType::class)
		#->add('loadingEstimatedDate', DateType::class)
		#->add('loadingEstimatedTime', TimeType::class)
		#->add('deliveryEstimatedDate', DateType::class)
		#->add('deliveryEstimatedTime', TimeType::class)
		//->add('save', SubmitType::class);
		
		 // À partir du formBuilder, on génère le formulaire
		// $form = $formBuilder->getForm();


		 
		 // Si la requête est en POST
		if ($request->isMethod('POST')) 
		{
		  // On fait le lien Requête <-> Formulaire
		  // À partir de maintenant, la variable detailRef contient les valeurs entrées dans le formulaire par le visiteur
		  $form->handleRequest($request);

		  // On vérifie que les valeurs entrées sont correctes
		  // (Nous verrons la validation des objets en détail dans le prochain chapitre)
		  if ($form->isValid()) 
		  {
			// On enregistre notre objet $detailRef dans la base de données, par exemple
			$em = $this->getDoctrine()->getManager();
			$em->persist($detailRef);
			$em->flush();

			$request->getSession()->getFlashBag()->add('notice', 'Chargement bien enregistrée.');

			// On redirige vers la page de visualisation de l'annonce nouvellement créée
			return $this->redirectToRoute('fcscp_cp_split_view_homepage', array('id' => $detailRef->getId()));
		  }
		}
		
		// On passe la méthode createView() du formulaire à la vue
		// afin qu'elle puisse afficher le formulaire toute seule
	  return $this->render('FCSCPCpSplitViewBundle:Add:add.html.twig', array('form' => $form->createView(),
	 ));
    }
}
