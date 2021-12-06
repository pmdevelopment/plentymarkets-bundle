<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 12.02.2018
 * Time: 10:11
 */

namespace PM\PlentyMarketsBundle\Component\Model\Order;

use DateTime;
use JMS\Serializer\Annotation as JMS;

/**
 * Class StatusHistoryEntry
 *
 * @package PM\PlentyMarketsBundle\Component\Model\Order
 *
 * @JMS\ExclusionPolicy("ALL")
 */
class StatusHistoryEntry
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
    private $orderId;

    /**
     * @var float
     *
     * @JMS\Type("float")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $statusId;

    /**
     * @var DateTime
     *
     * @JMS\Type("DateTime")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $createdAt;

    /**
     * @var integer
     *
     * @JMS\Type("integer")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $userId;

    /**
     * @var string
     *
     * @JMS\Type("string")
     * @JMS\Expose()
     * @JMS\Since("1.0")
     */
    private $procedureText = '';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return StatusHistoryEntry
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     *
     * @return StatusHistoryEntry
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @return float
     */
    public function getStatusId(): float
    {
        return $this->statusId;
    }

    /**
     * @param float $statusId
     *
     * @return StatusHistoryEntry
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     *
     * @return StatusHistoryEntry
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     *
     * @return StatusHistoryEntry
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return string
     */
    public function getProcedureText(): string
    {
        return $this->procedureText;
    }

    /**
     * @param string $procedureText
     *
     * @return StatusHistoryEntry
     */
    public function setProcedureText(string $procedureText): self
    {
        $this->procedureText = $procedureText;

        return $this;
    }

}