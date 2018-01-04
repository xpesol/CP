<?php

namespace FCS\CP\LoadingSplitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Loadingsplitsku
 *
 * @ORM\Table(name="cp_loading_po_sku")
 * @ORM\Entity(repositoryClass="FCS\CP\LoadingSplitBundle\Repository\LoadingsplitskuRepository")
 */
class Loadingsplitsku
{
	
    /**
	* @ORM\OneToOne(targetEntity="FCS\CP\LoadingSplitBundle\Entity\Loading")
	*@ORM\JoinColumn(name="idloading", referencedColumnName="idloading")
	*/
	private $loading;


    /**
     * @var int
     *
     * @ORM\Column(name="idloading_po_sku", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idloadingposku;

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
    private $numpo;


    /**
     * Get id
     *
     * @return int
     */
    public function getIdloadingposku()
    {
        return $this->idloadingposku;
    }

    /**
     * Set idloading
     *
     * @param integer $idloading
     *
     * @return Loadingsplitsku
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
     * Set numpo
     *
     * @param string $numpo
     *
     * @return Loadingsplitsku
     */
    public function setNumpo($numpo)
    {
        $this->numpo = $numpo;

        return $this;
    }

    /**
     * Get numpo
     *
     * @return string
     */
    public function getNumpo()
    {
        return $this->numpo;
    }
	
	public function setLoading(Loading $loading = null)
	{
		$this->loading = $loading;
	}

	public function getLoading()
	{
		return $this->loading;
	}

}

