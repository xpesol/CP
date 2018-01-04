<?php

namespace FCS\CP\LoadingSplitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LoadingPoSku
 *
 * @ORM\Table(name="cp_loading_po_sku")
 * @ORM\Entity(repositoryClass="FCS\CP\LoadingSplitBundle\Repository\LoadingPoSkuRepository")
 */
class LoadingPoSku
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
     * @ORM\Column(name="sku_id", type="string", length=255)
     */
    private $skuId;

    /**
     * @var int
     *
     * @ORM\Column(name="idloading", type="integer")
     */
    private $idloading;


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
     * @return LoadingPoSku
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
     * @return LoadingPoSku
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
     * Set idloading
     *
     * @param integer $idloading
     *
     * @return LoadingPoSku
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
}

