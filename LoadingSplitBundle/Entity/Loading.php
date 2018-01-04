<?php

namespace FCS\CP\LoadingSplitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Loading
 *
 * @ORM\Table(name="cp_loading")
 * @ORM\Entity(repositoryClass="FCS\LoadingSplitBundle\Repository\LoadingRepository")
 */
class Loading
{


    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;

    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(name="idloading", type="integer", unique=true)
     */
    private $idloading;



    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return Loading
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
     * Set idloading
     *
     * @param integer $idloading
     *
     * @return Loading
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

