<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 11.07.2017
 * Time: 13:22
 */

namespace PM\PlentyMarketsBundle\Component\Provider;

use DateTimeInterface;
use Exception;
use GuzzleHttp\RequestOptions;
use PM\PlentyMarketsBundle\Component\Model\Order\Order;
use PM\PlentyMarketsBundle\Component\Model\Order\OrderDateType;
use PM\PlentyMarketsBundle\Component\Model\Order\OrderItem;
use PM\PlentyMarketsBundle\Component\Model\Order\OrderPropertyType;
use PM\PlentyMarketsBundle\Component\Model\Order\OrderReferrer;
use PM\PlentyMarketsBundle\Component\Model\Order\OrderShippingPackage;
use PM\PlentyMarketsBundle\Component\Model\Order\OrderShippingPreset;
use PM\PlentyMarketsBundle\Component\Model\Order\StatusHistoryEntry;
use PM\PlentyMarketsBundle\Component\Response\OrderResponse;
use PM\PlentyMarketsBundle\Component\RestfulUrl;
use Symfony\Component\HttpFoundation\Request;
use Throwable;


/**
 * Class OrdersProvider
 *
 * @package PM\PlentyMarketsBundle\Component\Provider
 */
class OrdersProvider extends BaseProvider
{
    /**
     * @param DateTimeInterface $updatedAt
     * @param int               $page
     *
     * @return array|Throwable|array|Order[]
     * @throws Throwable
     */
    public function findUpdatedAtFrom(DateTimeInterface $updatedAt, int $page = 1)
    {
        $options = [
            'query' => [
                'updatedAtFrom' => $updatedAt->format('c'),
                'itemsPerPage'  => 250,
                'page'          => $page,
            ],
        ];

        $response = $this->getResponse(Request::METHOD_GET, RestfulUrl::ORDERS, $options);
        if ($response instanceof Throwable) {
            return $response;
        }

        $data = $this->getService()->getSerializer()->deserialize($response->getBody()->getContents(), OrderResponse::class, 'json');

        if (true === $data->isIsLastPage()) {
            return $data->getEntries();
        }

        /* Get other pages */
        $merged = $this->findUpdatedAtFrom($updatedAt, $page + 1);
        if ($merged instanceof Throwable) {
            return $merged;
        }

        return array_merge($data->getEntries(), $merged);
    }

    /**
     * Get Order By Id
     *
     * @param int   $orderId
     * @param array $query
     *
     * @return array|Throwable|object|Order
     * @throws Throwable
     */
    public function getById(int $orderId, array $query = [])
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ORDER, $orderId), ['query' => $query]);

        if ($response instanceof Exception) {
            return $response;
        }

        /* Fix wrong datetime */
        $body = str_replace('-0001-11-30T00:00:00+01:00', '0000-00-00T00:00:00+01:00', $response->getBody()->getContents());
        $body = str_replace('-0001-11-30T00:00:00+00:53', '0000-00-00T00:00:00+01:00', $body);

        try {
            return $this->getService()->getSerializer()->deserialize($body, Order::class, 'json');
        } catch (Throwable $throwable) {
            return $throwable;
        }
    }

    /**
     * Get Order By Id; Include Addresses
     *
     * @param int $orderId
     *
     * @return array|Throwable|object|Order
     * @throws Throwable
     */
    public function getByIdWithAddresses(int $orderId)
    {
        return $this->getById(
            $orderId,
            [
                'with' => ['addresses'],
            ]
        );
    }

    /**
     * Get Order Shipping packages
     *
     * @param int $orderId
     *
     * @return array|OrderShippingPackage[]
     * @throws Throwable
     */
    public function getShippingPackages($orderId)
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ORDER_SHIPPING_PACKAGES, $orderId));
        if ($response instanceof Exception) {
            return $response;
        }

        return $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            sprintf('array<%s>', OrderShippingPackage::class),
            'json'
        );
    }


    /**
     * Get Order status history
     *
     * @param int $orderId
     *
     * @return array|StatusHistoryEntry[]
     * @throws Throwable
     */
    public function getStatusHistory($orderId)
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ORDER_STATUS_HISTORY, $orderId));
        if ($response instanceof Exception) {
            return $response;
        }

        return $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            sprintf('array<%s>', StatusHistoryEntry::class),
            'json'
        );
    }

    /**
     * Get Item By Id
     *
     * @param int $orderId
     * @param int $itemId
     *
     * @return Throwable|null|OrderItem
     * @throws Throwable
     */
    public function getItemById($orderId, $itemId)
    {
        $order = $this->getById($orderId);
        if ($order instanceof Exception) {
            return $order;
        }

        foreach ($order->getOrderItems() as $item) {
            if ($item->getId() === $itemId) {
                return $item;
            }
        }

        return null;
    }

    /**
     * Get Property Type By Id
     *
     * @param int $propertyId
     *
     * @return array|Throwable|object|OrderPropertyType
     * @throws Throwable
     */
    public function getPropertyTypeById($propertyId)
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ORDER_PROPERTY_TYPE, $propertyId));

        if ($response instanceof Exception) {
            return $response;
        }

        return $this->getService()->getSerializer()->deserialize($response->getBody()->getContents(), OrderPropertyType::class, 'json');
    }

    /**
     * Get Shipping Presets
     *
     * @return Throwable|OrderShippingPreset[]
     * @throws Throwable
     */
    public function getShippingPresets()
    {
        $response = $this->getResponse(Request::METHOD_GET, RestfulUrl::ORDER_SHIPPING_PRESETS);
        if ($response instanceof Exception) {
            return $response;
        }

        return $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            sprintf('array<%s>', OrderShippingPreset::class),
            'json'
        );
    }

    /**
     * Get Referrers
     *
     * @return Exception|OrderReferrer[]
     */
    public function getReferrers()
    {
        $response = $this->getResponse(Request::METHOD_GET, RestfulUrl::ORDER_REFERRERS);
        if ($response instanceof Exception) {
            return $response;
        }

        return $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            sprintf('array<%s>', OrderReferrer::class),
            'json'
        );
    }

    /**
     * Get Date Types
     *
     * @return array|Exception|OrderDateType[]
     */
    public function getDateTypes()
    {
        $response = $this->getResponse(Request::METHOD_GET, RestfulUrl::ORDER_DATE_TYPES);
        if ($response instanceof Exception) {
            return $response;
        }

        return $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            sprintf('array<%s>', OrderDateType::class),
            'json'
        );
    }

    /**
     * Put property value
     *
     * @param int    $orderId
     * @param int    $propertyId
     * @param string $value
     *
     * @return bool|Exception
     */
    public function putProperty($orderId, $propertyId, $value)
    {
        $response = $this->getResponse(
            Request::METHOD_PUT,
            sprintf(RestfulUrl::ORDER_PROPERTY, $orderId, $propertyId),
            [
                RequestOptions::JSON => [
                    'typeId' => $propertyId,
                    'value'  => $value,
                ],
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        return true;
    }

    /**
     * Put Warehouse ID for Order Item
     *
     * @param int $orderId
     * @param int $orderItemId
     * @param int $warehouseApiId
     *
     * @return bool|Exception|mixed
     */
    public function putItemWarehouse(int $orderId, int $orderItemId, int $warehouseApiId)
    {
        $response = $this->getResponse(
            Request::METHOD_PUT,
            sprintf(RestfulUrl::ORDER, $orderId),
            [
                RequestOptions::JSON => [
                    'orderItems' => [
                        [
                            'id'          => $orderItemId,
                            'warehouseId' => $warehouseApiId,
                        ],
                    ],
                ],
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        return true;
    }
}