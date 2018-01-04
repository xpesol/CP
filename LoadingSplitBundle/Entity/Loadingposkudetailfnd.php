<?php

namespace FCS\CP\LoadingSplitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Loadingposkudetailfnd
 *
 * @ORM\Table(name="cp_loading_po_sku_detail_fnd")
 * @ORM\Entity(repositoryClass="FCS\CP\LoadingSplitBundle\Repository\LoadingposkudetailfndRepository")
 */
class Loadingposkudetailfnd
{
	
	    /**
	* @ORM\OneToOne(targetEntity="FCS\CP\LoadingSplitBundle\Entity\Loadingsplitsku")
	*@ORM\JoinColumn(name="idloading_po_sku", referencedColumnName="idloading_po_sku")
	*/
	private $loadingsplitsku;
	

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\Column(name="idloading_po_sku", type="integer")
     */
    private $idloadingposku;

    /**
     * @var string
     *
     * @ORM\Column(name="entrepot", type="string", length=255)
     */
    private $entrepot;

    /**
     * @var int
     *
     * @ORM\Column(name="quantites", type="integer", nullable=true)
     */
    private $quantites;

    /**
     * @var string
     *
     * @ORM\Column(name="estimed_date_arrived", type="string", length=255, nullable=true)
     */
    private $estimeddatearrived;

    /**
     * @var string
     *
     * @ORM\Column(name="sous_pays", type="string", length=255, nullable=true)
     */
    private $souspays;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idloadingposku
     *
     * @param integer $idloadingposku
     *
     * @return Loadingposkudetailfnd
     */
    public function setIdloadingposku($idloadingposku)
    {
        $this->idloadingposku = $idloadingposku;

        return $this;
    }

    /**
     * Get idloadingposku
     *
     * @return int
     */
    public function getIdloadingposku()
    {
        return $this->idloadingposku;
    }

    /**
     * Set entrepot
     *
     * @param string $entrepot
     *
     * @return Loadingposkudetailfnd
     */
    public function setEntrepot($entrepot)
    {
        $this->entrepot = $entrepot;

        return $this;
    }

    /**
     * Get entrepot
     *
     * @return string
     */
    public function getEntrepot()
    {	
        return $this->entrepot;
    }

    /**
     * Set quantites
     *
     * @param integer $quantites
     *
     * @return Loadingposkudetailfnd
     */
    public function setQuantites($quantites)
    {
        $this->quantites = $quantites;

        return $this;
    }

    /**
     * Get quantites
     *
     * @return int
     */
    public function getQuantites()
    {
        return $this->quantites;
    }

    /**
     * Set estimeddatearrived
     *
     * @param string $estimeddatearrived
     *
     * @return Loadingposkudetailfnd
     */
    public function setEstimeddatearrived($estimeddatearrived)
    {
        $this->estimeddatearrived = $estimeddatearrived;

        return $this;
    }

    /**
     * Get estimeddatearrived
     *
     * @return string
     */
    public function getEstimeddatearrived()
    {
	$week = date("W", strtotime($this->estimeddatearrived));
    return $week;
    }

    /**
     * Set souspays
     *
     * @param string $souspays
     *
     * @return Loadingposkudetailfnd
     */
    public function setSouspays($souspays)
    {
        $this->souspays = $souspays;

        return $this;
    }

    /**
     * Get souspays
     *
     * @return string
     */
    public function getSouspays()
    {
        return $this->souspays;
    }
	
	public function setLoadingsplitsku(Loadingsplitsku $loadingsplitsku  = null)
	{
		$this->loadingsplitsku  = $loadingsplitsku ;
	}

	public function getLoadingsplitsku ()
	{
		return $this->loadingsplitsku ;
	}
}

