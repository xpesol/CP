<?php

namespace FCS\CP\EditCpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CpLoadingPoSku
 *
 * @ORM\Table(name="cp_loading_po_sku")
 * @ORM\Entity(repositoryClass="FCS\CP\EditCpBundle\Repository\CpLoadingPoSkuRepository")
 */

 
 class CpLoadingPoSku
{
		
    /**
     * @var int
     *
     * @ORM\Column(name="idloading_po_sku", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idloadingPoSku;

    /**
     * @var int
     *
     * @ORM\Column(name="idloading", type="integer")
     */
    private $idloading;

    /**
     * @var string
     *
     * @ORM\Column(name="num_po", type="string", length=255)
     */
    private $numPo;

    /**
     * @var string
     *
     * @ORM\Column(name="sku_id", type="string", length=255)
     */
    private $skuId;


    /**
     * Get id
     *
     * @return int
     */
    public function getIdloadingPoSku()
    {
        return $this->idloadingPoSku;
    }

    /**
     * Set idloading
     *
     * @param integer $idloading
     *
     * @return CpLoadingPoSku
     */
    public function setIdloading($idloading)
    {
        $this->idloading = $idloading;

        return $this;
    }

    /**
     * Get idloading
     *
     * @return int
     */
    public function getIdloading()
    {
        return $this->idloading;
    }

    /**
     * Set numPo
     *
     * @param string $numPo
     *
     * @return CpLoadingPoSku
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
     * Set skuId
     *
     * @param string $skuId
     *
     * @return CpLoadingPoSku
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
	

}