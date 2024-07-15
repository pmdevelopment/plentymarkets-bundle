<?php

namespace PM\PlentyMarketsBundle\Component\Model\Order;

use JMS\Serializer\Annotation as JMS;

class OrderAddressRelation
{
    public const TYPE_ID_BILLING = 1;
    public const TYPE_ID_DELIVERY = 2;

    #[JMS\Type('integer')]
    #[JMS\Since('1.0')]
    private $orderId;

    #[JMS\Type('integer')]
    #[JMS\Since('1.0')]
    private $typeId;

    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
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