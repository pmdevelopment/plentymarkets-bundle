<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 31.08.2017
 * Time: 11:39
 */

namespace PM\PlentyMarketsBundle\Component\Model\Item;

use JMS\Serializer\Annotation as JMS;

/**
 * Class ManufacturerCommission
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Item
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class ManufacturerCommission
{
    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $id;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $manufacturerId;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $plentyId;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $referrerId;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $commission;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return ManufacturerCommission
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getManufacturerId()
    {
        return $this->manufacturerId;
    }

    /**
     * @param int $manufacturerId
     *
     * @return ManufacturerCommission
     */
    public function setManufacturerId($manufacturerId)
    {
        $this->manufacturerId = $manufacturerId;

        return $this;
    }

    /**
     * @return int
     */
    public function getPlentyId()
    {
        return $this->plentyId;
    }

    /**
     * @param int $plentyId
     *
     * @return ManufacturerCommission
     */
    public function setPlentyId($plentyId)
    {
        $this->plentyId = $plentyId;

        return $this;
    }

    /**
     * @return float
     */
    public function getReferrerId()
    {
        return $this->referrerId;
    }

    /**
     * @param float $referrerId
     *
     * @return ManufacturerCommission
     */
    public function setReferrerId($referrerId)
    {
        $this->referrerId = $referrerId;

        return $this;
    }

    /**
     * @return float
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * @param float $commission
     *
     * @return ManufacturerCommission
     */
    public function setCommission($commission)
    {
        $this->commission = $commission;

        return $this;
    }

}