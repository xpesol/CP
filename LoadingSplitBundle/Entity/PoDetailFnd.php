<?php

namespace FCS\CP\LoadingSplitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PoDetailFnd
 *
 * @ORM\Table(name="po_detail_fnd")
 * @ORM\Entity(repositoryClass="FCS\CP\LoadingSplitBundle\Repository\PoDetailFndRepository")
 */
class PoDetailFnd
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="num_po", type="string", length=255)
     */
    private $numPo;

    /**
     * @var string
     *
     * @ORM\Column(name="entrepot", type="string", length=255, nullable=true)
     */
    private $entrepot;

    /**
     * @var int
     *
     * @ORM\Column(name="quantites", type="integer", nullable=false)
     */
    private $quantites;
	
	 /**
     * @var string
     *
     * @ORM\Column(name="estimed_date_arrived", type="string", length=255, nullable=true)
     */
    private $estimeddatearrived;

    /**
     * @var int
     *
     * @ORM\Column(name="date_mad_rt", type="string", nullable=true)
     */
    private $dateMadRt;


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
     * Set numPo
     *
     * @param string $numPo
     *
     * @return PoDetailFnd
     */
    public function setNumPo($numPo)
    {
        $this->numPo = $numPo;

        return $this;
    }

    /**
     * Get numPo
     *
     * @return string
     */
    public function getNumPo()
    {
        return $this->numPo;
    }

    /**
     * Set entrepot
     *
     * @param string $entrepot
     *
     * @return PoDetailFnd
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
     * @return PoDetailFnd
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
     * Set dateMadRt
     *
     * @param integer $dateMadRt
     *
     * @return PoDetailFnd
     */
    public function setDateMadRt($dateMadRt)
    {
        $this->dateMadRt = $dateMadRt;

        return $this;
    }

    /**
     * Get dateMadRt
     *
     * @return int
     */
    public function getDateMadRt()
    {
        return $this->dateMadRt;
    }
}

