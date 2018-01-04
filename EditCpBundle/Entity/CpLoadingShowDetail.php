<?php

namespace FCS\CP\EditCpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpLoadingShowDetail
 * @ORM\Entity(readOnly=true)
 * @ORM\Table(name="cp.loading_show_detail")
 * @ORM\Entity(repositoryClass="FCS\CP\EditCpBundle\Repository\CpLoadingShowDetailRepository")
 */

 class CpLoadingShowDetail
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
     * @ORM\Column(name="ref", type="string", length=255, nullable=true)
     */
    private $ref;
	
    /**
     * @var string
     *
     * @ORM\Column(name="num_po", type="string", length=255, nullable=true)
     */
    private $numPo;

	
	/**
     * @var string
     *
     * @ORM\Column(name="sku_id", type="string", length=255, nullable=true)
     */
    private $skuId;
	
	
	/**
     * @var string
     *
     * @ORM\Column(name="sku_designation", type="string", length=255, nullable=true)
     */
    private $skuDesignation;
	
	/**
     * @var int
     *
     * @ORM\Column(name="idloading_po_sku", type="integer", nullable=true)
     */
    private $idloadingPoSku;
	
	/**
     * @var int
     *
     * @ORM\Column(name="idloading_po_sku_detail", type="integer", nullable=true)
     */
    private $idloadingPoSkuDetail;
	
	
	
	/**
     * @var int
     *
     * @ORM\Column(name="pallet_nb", type="integer", nullable=true)
     */
    private $numberPallet;
	
	
	/**
     * @var int
     *
     * @ORM\Column(name="pallet_ctn_per", type="integer", nullable=true)
     */
    private $numberCartonPerPallet;
	
	/**
     * @var float
     *
     * @ORM\Column(name="pallet_weight", type="float", nullable=true)
     */
    private $palletWeight;
	
	/**
     * @var string
     *
     * @ORM\Column(name="pallet_family", type="string", nullable=true)
     */
    private $palletFamily;
	
	

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
     * @return CpLoadingShowDetail
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
     * Set ref
     *
     * @param string $ref
     *
     * @return CpLoadingShowDetail
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }
	
	
	/**
     * Set skuId
     *
     * @param string $skuId
     *
     * @return CpLoadingShowDetail
     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;

        return $this;
    }

    /**
     * Get skuId
     *
     * @return string
     */
    public function getSkuId()
    {
        return $this->skuId;
    }
	

	/**
     * Set skuDesignation
     *
     * @param string $skuDesignation
     *
     * @return CpLoadingShowDetail
     */
    public function setSkuDesignation($skuDesignation)
    {
        $this->skuDesignation = $skuDesignation;

        return $this;
    }

    /**
     * Get skuDesignation
     *
     * @return string
     */
    public function getSkuDesignation()
    {
        return $this->skuDesignation;
    }
	
	/**
     * Set idloadingPoSku
     *
     * @param int $idloadingPoSku
     *
     * @return CpLoadingShowDetail
     */
    public function setIdloadingPoSku($idloadingPoSku)
    {
        $this->idloadingPoSku = $idloadingPoSku;

        return $this;
    }

	
    /**
     * Get idloadingPoSku
     *
     * @return int
     */
    public function getIdloadingPoSku()
    {
        return $this->idloadingPoSku;
    }
	
	
	/**
     * Set idloadingPoSkuDetail
     *
     * @param int $idloadingPoSkuDetail
     *
     * @return CpLoadingShowDetail
     */
    public function setIdloadingPoSkuDetail($idloadingPoSkuDetail)
    {
        $this->idloadingPoSkuDetail = $idloadingPoSkuDetail;

        return $this;
    }

    /**
     * Get idloadingPoSkuDetail
     *
     * @return int
     */
    public function getIdloadingPoSkuDetail()
    {
        return $this->idloadingPoSkuDetail;
    }
	
	
	/**
     * Set numberPallet
     *
     * @param int $numberPallet
     *
     * @return CpLoadingShowDetail
     */
    public function setNumberPallet($numberPallet)
    {
        $this->numberPallet = $numberPallet;

        return $this;
    }

    /**
     * Get numberPallet
     *
     * @return int
     */
    public function getNumberPallet()
    {
        return $this->numberPallet;
    }
	
   	/**
     * Set numberCartonPerPallet
     *
     * @param int $numberCartonPerPallet
     *
     * @return CpLoadingShowDetail
     */
    public function setNumberCartonPerPallet($numberCartonPerPallet)
    {
        $this->numberCartonPerPallet = $numberCartonPerPallet;

        return $this;
    }

    /**
     * Get numberCartonPerPallet
     *
     * @return int
     */
    public function getNumberCartonPerPallet()
    {
        return $this->numberCartonPerPallet;
    }
	
	
	 /**
     * Set palletWeight
     *
     * @param float $palletWeight
     *
     * @return CpLoadingShowDetail
     */
    public function setPalletWeight($palletWeight)
    {
        $this->palletWeight = $palletWeight;

        return $this;
    }

    /**
     * Get palletWeight
     *
     * @return float
     */
    public function getPalletWeight()
    {
        return $this->palletWeight;
    }
	
	
	/**
     * Set palletFamily
     *
     * @param string $palletFamily
     *
     * @return CpLoadingShowDetail
     */
    public function setPalletFamily($palletFamily)
    {
        $this->palletFamily = $palletFamily;

        return $this;
    }

    /**
     * Get palletFamily
     *
     * @return string
     */
    public function getPalletFamily()
    {
        return $this->palletFamily;
    }
	
}
