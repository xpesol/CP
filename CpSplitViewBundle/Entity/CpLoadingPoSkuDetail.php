<?php

namespace FCS\CP\CpSplitViewBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpLoadingPoSkuDetail
 *
 * @ORM\Table(name="cp_loading_po_sku_detail")
 * @ORM\Entity(repositoryClass="FCS\CP\CpSplitViewBundle\Repository\CpLoadingPoSkuDetailRepository")
 */
class CpLoadingPoSkuDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="idloading_po_sku_detail", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idloadingPoSkuDetail;

    /**
     * @var int
     *
     * @ORM\Column(name="idloadingPoSku", type="integer")
     */
    private $idloadingPoSku;

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
     * @var string
     *
     * @ORM\Column(name="pallet_family", type="string", length=255, nullable=true)
     */
    private $palletFamily;

    /**
     * @var float
     *
     * @ORM\Column(name="pallet_weight", type="float", nullable=true)
     */
    private $palletWeight;


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
     * Set idloadingPoSku
     *
     * @param integer $idloadingPoSku
     *
     * @return CpLoadingPoSkuDetail
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
     * Set numberPallet
     *
     * @param integer $numberPallet
     *
     * @return CpLoadingPoSkuDetail
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
     * @param integer $numberCartonPerPallet
     *
     * @return CpLoadingPoSkuDetail
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
     * @return CpLoadingPoSkuDetail
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
     * @return CpLoadingPoSkuDetail
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

