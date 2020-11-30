<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 19.03.2018
 * Time: 10:34
 */

namespace PM\PlentyMarketsBundle\Component\Model\Item;


use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class SalesPriceReferrer
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Item
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class SalesPriceReferrer
{
    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $salesPriceId;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $referrerId;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $createdAt;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $updatedAt;

    /**
     * @return int
     */
    public function getSalesPriceId()
    {
        return $this->salesPriceId;
    }

    /**
     * @param int $salesPriceId
     *
     * @return SalesPriceReferrer
     */
    public function setSalesPriceId($salesPriceId)
    {
        $this->salesPriceId = $salesPriceId;

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
     * @return SalesPriceReferrer
     */
    public function setReferrerId($referrerId)
    {
        $this->referrerId = $referrerId;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return SalesPriceReferrer
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTime $updatedAt
     *
     * @return SalesPriceReferrer
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}