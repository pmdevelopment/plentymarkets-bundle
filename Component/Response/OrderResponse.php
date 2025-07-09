<?php


namespace PM\PlentyMarketsBundle\Component\Response;

use JMS\Serializer\Annotation as JMS;
use PM\PlentyMarketsBundle\Component\Model\Order\Order;

/**
 * Class OrderResponse
 *
 * @package PM\PlentyMarketsBundle\Component\Response
 */
class OrderResponse extends PaginationResponse
{
    /**
     * @var Order[]|array
     */
    #[JMS\Type('array<PM\PlentyMarketsBundle\Component\Model\Order\Order>')]
    #[JMS\Expose]
    #[JMS\Since('1.0')]
    private array $entries = [];

    /**
     * @return Order[]
     */
    public function getEntries(): array
    {
        return $this->entries;
    }

    /**
     * @param Order[] $entries
     *
     * @return OrderResponse
     */
    public function setEntries(array $entries): OrderResponse
    {
        $this->entries = $entries;

        return $this;
    }
}