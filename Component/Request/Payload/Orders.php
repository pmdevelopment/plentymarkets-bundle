<?php


namespace PM\PlentyMarketsBundle\Component\Request\Payload;

use PM\PlentyMarketsBundle\Component\Request\Payload;
use PM\PlentyMarketsBundle\Component\RestfulUrl;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Order
 *
 * @package PM\PlentyMarketsBundle\Component\Request\Payload
 */
class Orders
{
    /**
     * Delete Order Item
     *
     * @param int $orderId
     * @param int $orderItemId
     *
     * @return Payload
     */
    public static function deleteOrderItem(int $orderId, int $orderItemId): Payload
    {
        $payload = new Payload();
        $payload
            ->setResource(sprintf(RestfulUrl::ORDER_ITEM, $orderId, $orderItemId))
            ->setMethod(Request::METHOD_DELETE);

        return $payload;
    }

    /**
     * Get StatusId Update
     *
     * @param int    $orderId
     * @param string $newStatusId
     *
     * @return Payload
     */
    public static function postStatusId(int $orderId, string $newStatusId): Payload
    {
        $payload = new Payload();
        $payload
            ->setResource(sprintf(RestfulUrl::ORDER, $orderId))
            ->setMethod(Request::METHOD_PUT)
            ->setBody(
                [
                    'statusId' => $newStatusId,
                ]
            );

        return $payload;
    }

}