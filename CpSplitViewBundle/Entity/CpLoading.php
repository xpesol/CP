<?php

namespace FCS\CP\CpSplitViewBundle\Entity;

use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Validator\Constraints\Date;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\DateType;

/**
 * CpLoading
 *
 * @ORM\Table(name="cp_loading")
 * @ORM\Entity(repositoryClass="FCS\CP\CpSplitViewBundle\Repository\CpLoadingRepository")
 */
class CpLoading
{
    /**
     * @var int
     *
     * @ORM\Column(name="idloading", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idloading;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;

    /**
     * @var string
     *
     * @ORM\Column(name="loading_address", type="text", nullable=true)
     */
    private $loadingAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="loading_contact", type="text", nullable=true)
     */
    private $loadingContact;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_contact", type="text", nullable=true)
     */
    private $deliveryContact;

    /**
     * @var string
     *
     * @ORM\Column(name="remarks", type="text", nullable=true)
     */
    private $remarks;

    /**
     * @var string
     *
     * @ORM\Column(name="loading_estimated_date", type="string", length=255, nullable=true)
     */
    private $loadingEstimatedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="loading_estimated_time", type="string", length=4, nullable=true)
     */
    private $loadingEstimatedTime;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_estimated_date", type="string", length=8, nullable=true)
     */
    private $deliveryEstimatedDate;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_estimated_time", type="string", length=8, nullable=true)
     */
    private $deliveryEstimatedTime;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->idloading;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return CpLoading
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
     * Set loadingAdress
     *
     * @param string $loadingAddress
     *
     * @return CpLoading
     */
    public function setLoadingAddress($loadingAddress)
    {
        $this->loadingAddress = $loadingAddress;

        return $this;
    }

    /**
     * Get loadingAddress
     *
     * @return string
     */
    public function getLoadingAddress()
    {
        return $this->loadingAddress;
    }

    /**
     * Set loadingContact
     *
     * @param string $loadingContact
     *
     * @return CpLoading
     */
    public function setLoadingContact($loadingContact)
    {
        $this->loadingContact = $loadingContact;

        return $this;
    }

    /**
     * Get loadingContact
     *
     * @return string
     */
    public function getLoadingContact()
    {
        return $this->loadingContact;
    }

    /**
     * Set deliveryContact
     *
     * @param string $deliveryContact
     *
     * @return CpLoading
     */
    public function setDeliveryContact($deliveryContact)
    {
        $this->deliveryContact = $deliveryContact;

        return $this;
    }

    /**
     * Get deliveryContact
     *
     * @return string
     */
    public function getDeliveryContact()
    {
        return $this->deliveryContact;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return CpLoading
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Set loadingEstimatedDate
     *
     * @param string $loadingEstimatedDate
     *
     * @return CpLoading
     */
    public function setLoadingEstimatedDate($loadingEstimatedDate)
    {
		list($day, $month, $year) = split('[/.-]', $loadingEstimatedDate);
        $this->loadingEstimatedDate = $year.$month.$day;
		
        return $this;
    }

    /**
     * Get loadingEstimatedDate
     *
     * @return string
     */
    public function getLoadingEstimatedDate()
    {
        
	return date("d/m/Y", strtotime($this->loadingEstimatedDate));
	
	#return $this->loadingEstimatedDate;
    }

    /**
     * Set loadingEstimatedTime
     *
     * @param string $loadingEstimatedTime
     *
     * @return CpLoading
     */
    public function setLoadingEstimatedTime($loadingEstimatedTime)
    {
        $this->loadingEstimatedTime = $loadingEstimatedTime;

        return $this;
    }

    /**
     * Get loadingEstimatedTime
     *
     * @return string
     */
    public function getLoadingEstimatedTime()
    {
        return date('H:i', strtotime($this->loadingEstimatedTime));
    }

    /**
     * Set deliveryEstimatedDate
     *
     * @param string $deliveryEstimatedDate
     *
     * @return CpLoading
     */
    public function setDeliveryEstimatedDate($deliveryEstimatedDate)
    {
	    list($day, $month, $year) = split('[/.-]', $deliveryEstimatedDate);
        $this->deliveryEstimatedDate = $year.$month.$day;

        return $this;
    }

    /**
     * Get deliveryEstimatedDate
     *
     * @return string
     */
    public function getDeliveryEstimatedDate()
    {
        
	 return date("d/m/Y", strtotime($this->deliveryEstimatedDate));
    }

    /**
     * Set deliveryEstimatedTime
     *
     * @param string $deliveryEstimatedTime
     *
     * @return CpLoading
     */
    public function setDeliveryEstimatedTime($deliveryEstimatedTime)
    {
        $this->deliveryEstimatedTime = $deliveryEstimatedTime;

        return $this;
    }

    /**
     * Get deliveryEstimatedTime
     *
     * @return string
     */
    public function getDeliveryEstimatedTime()
    {
        return date('H:i', strtotime($this->deliveryEstimatedTime));
    }
}

