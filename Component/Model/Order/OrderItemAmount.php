<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 11.07.2017
 * Time: 13:04
 */

namespace PM\PlentyMarketsBundle\Component\Model\Order;

use DateTime;
use JMS\Serializer\Annotation as JMS;
use PM\PlentyMarketsBundle\Component\Model\Base\BaseAmount;


/**
 * Class OrderItemAmount
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Order
 */
#[JMS\ExclusionPolicy('ALL')]
class OrderItemAmount extends BaseAmount
{
    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $id;

    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $orderItemId;

    /**
     * @var float
     */
    #[JMS\Type('float')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $purchasePrice;
    /**
     * @var float
     */
    #[JMS\Type('float')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $priceOriginalGross;
    /**
     * @var float
     */
    #[JMS\Type('float')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $priceOriginalNet;
    /**
     * @var float
     */
    #[JMS\Type('float')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $priceGross;
    /**
     * @var float
     */
    #[JMS\Type('float')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $priceNet;

    /**
     * @var float
     */
    #[JMS\Type('float')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $surcharge;

    /**
     * @var float
     */
    #[JMS\Type('float')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $discount;

    /**
     * @var bool
     */
    #[JMS\Type('boolean')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $isPercentage;

    /**
     * @var DateTime
     */
    #[JMS\Type('DateTime')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $createdAt;

    /**
     * @var DateTime
     */
    #[JMS\Type('DateTime')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $updatedAt;

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
     * @return OrderItemAmount
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderItemId()
    {
        return $this->orderItemId;
    }

    /**
     * @param int $orderItemId
     *
     * @return OrderItemAmount
     */
    public function setOrderItemId($orderItemId)
    {
        $this->orderItemId = $orderItemId;

        return $this;
    }

    /**
     * @return float
     */
    public function getPurchasePrice()
    {
        return $this->purchasePrice;
    }

    /**
     * @param float $purchasePrice
     *
     * @return OrderItemAmount
     */
    public function setPurchasePrice($purchasePrice)
    {
        $this->purchasePrice = $purchasePrice;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceOriginalGross()
    {
        return $this->priceOriginalGross;
    }

    /**
     * @param float $priceOriginalGross
     *
     * @return OrderItemAmount
     */
    public function setPriceOriginalGross($priceOriginalGross)
    {
        $this->priceOriginalGross = $priceOriginalGross;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceOriginalNet()
    {
        return $this->priceOriginalNet;
    }

    /**
     * @param float $priceOriginalNet
     *
     * @return OrderItemAmount
     */
    public function setPriceOriginalNet($priceOriginalNet)
    {
        $this->priceOriginalNet = $priceOriginalNet;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceGross()
    {
        return $this->priceGross;
    }

    /**
     * @param float $priceGross
     *
     * @return OrderItemAmount
     */
    public function setPriceGross($priceGross)
    {
        $this->priceGross = $priceGross;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceNet()
    {
        return $this->priceNet;
    }

    /**
     * @param float $priceNet
     *
     * @return OrderItemAmount
     */
    public function setPriceNet($priceNet)
    {
        $this->priceNet = $priceNet;

        return $this;
    }

    /**
     * @return float
     */
    public function getSurcharge()
    {
        return $this->surcharge;
    }

    /**
     * @param float $surcharge
     *
     * @return OrderItemAmount
     */
    public function setSurcharge($surcharge)
    {
        $this->surcharge = $surcharge;

        return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param float $discount
     *
     * @return OrderItemAmount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isIsPercentage()
    {
        return $this->isPercentage;
    }

    /**
     * @param boolean $isPercentage
     *
     * @return OrderItemAmount
     */
    public function setIsPercentage($isPercentage)
    {
        $this->isPercentage = $isPercentage;

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
     * @return OrderItemAmount
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
     * @return OrderItemAmount
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

}
