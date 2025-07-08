<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 12.07.2017
 * Time: 09:09
 */

namespace PM\PlentyMarketsBundle\Component\Model\Order;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class OrderDate
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Order
 */
#[JMS\ExclusionPolicy('ALL')]
class OrderDate
{
    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $orderId;

    /**
     * @var int
     */
    #[JMS\Type('integer')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $typeId;

    /**
     * @var DateTime
     */
    #[JMS\Type('DateTime')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private $date;

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
     * @return OrderDate
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
     * @return OrderDate
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     *
     * @return OrderDate
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

}