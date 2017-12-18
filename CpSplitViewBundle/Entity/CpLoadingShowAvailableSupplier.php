<?php

namespace FCS\CP\CpSplitViewBundle\Entity;

use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Date;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\DateType;

/**
 * CpLoadingShowAvailableSupplier
 *  @ORM\Entity(readOnly=true)
 * @ORM\Table(name="cp.loading_show_available")
 * @ORM\Entity(repositoryClass="FCS\CP\CpSplitViewBundle\Repository\CpLoadingShowAvailableSupplierRepository")
 */
class CpLoadingShowAvailableSupplier
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
     * @ORM\Column(name="num_po", type="string", length=255, nullable=true)
     */
    private $numPo;

	
	/**
     * @var string
     *
     * @ORM\Column(name="code_fournisseur", type="string", length=255, nullable=true)
     */
    private $supplierCode;
	
	
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
     * @ORM\Column(name="ctn_nb", type="integer", nullable=true)
     */
    private $numberCarton;
	
	/**
     * @var int
     *
     * @ORM\Column(name="pallet_nb", type="integer", nullable=true)
     */
    private $numberPallet;
	
	/**
     * @var string
     *
     * @ORM\Column(name="esd", type="string", length=255, nullable=true)
     */
    private $esd;
	
	/**
     * @var int
     *
     * @ORM\Column(name="pallet_ctn_per", type="integer", nullable=true)
     */
    private $numberCartonPerPallet;
	
	
	/**
     * @var string
     *
     * @ORM\Column(name="pallet_family", type="string", nullable=true)
     */
    private $palletFamily;
	
	
	/**
     * @var float
     *
     * @ORM\Column(name="pallet_weight", type="float", nullable=true)
     */
    private $palletWeight;
	
	
	
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
     * @return CpLoadingShowAvailableSupplier
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
     * Set supplierCode
     *
     * @param string $supplierCode
     *
     * @return CpLoadingShowAvailableSupplier
     */
    public function setSupplierCode($supplierCode)
    {
        $this->supplierCode = $supplierCode;

        return $this;
    }

    /**
     * Get supplierCode
     *
     * @return string
     */
    public function getSupplierCode()
    {
        return $this->supplierCode;
    }
		
	/**
     * Set skuId
     *
     * @param string $skuId
     *
     * @return CpLoadingShowAvailableSupplier
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
     * @return CpLoadingShowAvailableSupplier
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
     * Set numberCarton
     *
     * @param int $numberCarton
     *
     * @return CpLoadingShowAvailableSupplier
     */
    public function setNumberCarton($numberCarton)
    {
        $this->numberCarton = $numberCarton;

        return $this;
    }

    /**
     * Get numberCarton
     *
     * @return int
     */
    public function getNumberCarton()
    {
        return $this->numberCarton;
    }
	
	/**
     * Set numberPallet
     *
     * @param int $numberPallet
     *
     * @return CpLoadingShowAvailableSupplier
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
     * Set esd
     *
     * @param string $esd
     *
     * @return CpLoadingShowAvailableSupplier
     */
    public function setEsd($esd)
    {
        $this->esd = $esd;

        return $this;
    }

    /**
     * Get  esd
     *
     * @return string
     */
    public function getEsd()
    {
        return $this->esd;
    }
	
	
	   /**
     * Set numberCartonPerPallet
     *
     * @param int $numberCartonPerPallet
     *
     * @return CpLoadingShowAvailableSupplier
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
     * Set palletFamily
     *
     * @param string $palletFamily
     *
     * @return CpLoadingShowAvailableSupplier
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
	
	/**
     * Set palletWeight
     *
     * @param float $palletWeight
     *
     * @return CpLoadingShowAvailableSupplier
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
	
}

