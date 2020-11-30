<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 12.07.2017
 * Time: 08:59
 */

namespace PM\PlentyMarketsBundle\Component\Model\Order;

use JMS\Serializer\Annotation as JMS;

/**
 * Class OrderAddressRelation
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Order
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class OrderAddressRelation
{
    public const TYPE_ID_BILLING = 1;
    public const TYPE_ID_DELIVERY = 2;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $orderId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $typeId;

    /**
     * @var int
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $addressId;

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     *
     * @return OrderAddressRelation
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return int
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param int $typeId
     *
     * @return OrderAddressRelation
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return int
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * @param int $addressId
     *
     * @return OrderAddressRelation
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;

        return $this;
    }

}