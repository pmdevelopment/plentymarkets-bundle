<?php
/**
 * Created by PhpStorm.
 * Date: 12.07.2017
 * Time: 11:24
 */

namespace PM\PlentyMarketsBundle\Component\Provider;

use DateTime;
use DateTimeInterface;
use Exception;
use GuzzleHttp\RequestOptions;
use PM\PlentyMarketsBundle\Component\Model\Item\Barcode;
use PM\PlentyMarketsBundle\Component\Model\Item\Item;
use PM\PlentyMarketsBundle\Component\Model\Item\ItemImage;
use PM\PlentyMarketsBundle\Component\Model\Item\ItemVariation;
use PM\PlentyMarketsBundle\Component\Model\Item\ItemVariationBarcode;
use PM\PlentyMarketsBundle\Component\Model\Item\ItemVariationSalesPrice;
use PM\PlentyMarketsBundle\Component\Model\Item\ItemVariationStock;
use PM\PlentyMarketsBundle\Component\Model\Item\ItemVariationStockStorageLocation;
use PM\PlentyMarketsBundle\Component\Model\Item\ItemVariationSupplier;
use PM\PlentyMarketsBundle\Component\Model\Item\ItemVariationWarehouse;
use PM\PlentyMarketsBundle\Component\Model\Item\Manufacturer;
use PM\PlentyMarketsBundle\Component\Model\Item\SalesPrice;
use PM\PlentyMarketsBundle\Component\Response\ItemLocationsResponse;
use PM\PlentyMarketsBundle\Component\Response\ItemsBarcodesResponse;
use PM\PlentyMarketsBundle\Component\Response\ItemsResponse;
use PM\PlentyMarketsBundle\Component\Response\ItemsVariationsResponse;
use PM\PlentyMarketsBundle\Component\Response\ManufacturersResponse;
use PM\PlentyMarketsBundle\Component\RestfulUrl;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use Throwable;


/**
 * Class ItemsProvider
 *
 * @package PM\PlentyMarketsBundle\Component\Provider
 */
class ItemsProvider extends BaseProvider
{
    /**
     * Get All
     *
     * @param int   $page
     * @param array $query
     *
     * @return Exception|Item[]
     * @throws Throwable
     */
    public function getAll($page = 1, $query = [])
    {
        $response = $this->getResponse(
            Request::METHOD_GET,
            RestfulUrl::ITEMS,
            [
                'query' => array_merge(
                    [
                        'page' => $page,
                    ],
                    $query
                ),
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        /** @var ItemsResponse $data */
        $data = $this->getService()->getSerializer()->deserialize($response->getBody()->getContents(), ItemsResponse::class, 'json');

        if (true === $data->isIsLastPage()) {
            return $data->getEntries();
        }

        /* Get other pages */
        $merged = $this->getAll($page + 1, $query);
        if ($merged instanceof Exception) {
            $this->getService()->getLogger()->error(
                'ItemsProvider:getAll got some exception importing more pages',
                [
                    'message' => $merged->getMessage(),
                ]
            );

            $merged = [];
        }

        return array_merge($data->getEntries(), $merged);
    }

    /**
     * Get All Variations
     *
     * @param int   $page
     * @param array $query
     *
     * @return Exception|ItemVariation[]
     * @throws Throwable
     */
    public function getAllVariations($page = 1, $query = [])
    {
        $response = $this->getResponse(
            Request::METHOD_GET,
            RestfulUrl::ITEM_VARIATIONS,
            [
                'query' => array_merge(
                    [
                        'page' => $page,
                    ],
                    $query
                ),
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        /* Fix wrong datetime */
        $body = str_replace('-0001-11-30T00:00:00+01:00', '0000-00-00T00:00:00+01:00', $response->getBody()->getContents());
        $body = str_replace('-0001-11-30T00:00:00+00:53', '0000-00-00T00:00:00+01:00', $body);

        /** @var ItemsVariationsResponse $data */
        $data = $this->getService()->getSerializer()->deserialize($body, ItemsVariationsResponse::class, 'json');

        if (true === $data->isIsLastPage()) {
            return $data->getEntries();
        }

        /* Get other pages */
        $merged = $this->getAllVariations($page + 1, $query);
        if ($merged instanceof Exception) {
            $this->getService()->getLogger()->error(
                'ItemsProvider:getAllVariations got some exception importing more pages',
                [
                    'message' => $merged->getMessage(),
                ]
            );

            $merged = [];
        }

        return array_merge($data->getEntries(), $merged);
    }

    /**
     * Get All With Variations
     *
     * @return Exception|Item[]
     * @throws Throwable
     */
    public function getAllWithVariations()
    {
        return array_reverse(
            $this->getAll(
                1,
                [
                    'with' => 'variations',
                ]
            )
        );
    }

    /**
     * Get All With Variations
     *
     * @return Exception|Item[]
     * @throws Throwable
     */
    public function getAllWithVariationsAndImages()
    {
        return array_reverse(
            $this->getAll(
                1,
                [
                    'with' => 'variations,itemImages',
                ]
            )
        );
    }

    /**
     * @param int $page
     *
     * @return array|mixed|Manufacturer[]
     * @throws Throwable
     */
    public function getManufacturers($page = 1)
    {
        $response = $this->getResponse(
            Request::METHOD_GET,
            RestfulUrl::ITEM_MANUFACTURERS,
            [
                'query' => array_merge(
                    [
                        'page' => $page,
                    ]
                ),
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        /** @var ManufacturersResponse $data */
        $data = $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            ManufacturersResponse::class,
            'json'
        );

        if (true === $data->isIsLastPage()) {
            return $data->getEntries();
        }

        return array_merge($data->getEntries(), $this->getManufacturers($page + 1));
    }

    /**
     * Get Barcode Types
     *
     * @param int $page
     *
     * @return array|Exception|Barcode[]
     * @throws Throwable
     */
    public function getBarcodes($page = 1)
    {
        $response = $this->getResponse(
            Request::METHOD_GET,
            RestfulUrl::ITEM_BARCODES,
            [
                'query' => array_merge(
                    [
                        'page' => $page,
                    ]
                ),
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        /** @var ManufacturersResponse $data */
        $data = $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            ItemsBarcodesResponse::class,
            'json'
        );

        if (true === $data->isIsLastPage()) {
            return $data->getEntries();
        }

        return array_merge($data->getEntries(), $this->getBarcodes($page + 1));
    }

    /**
     * Get By Id
     *
     * @param int        $itemId
     *
     * @param array|null $query
     *
     * @return Exception|Item|mixed
     * @throws Throwable
     */
    public function getById(int $itemId, array $query = [])
    {
        $response = $this->getResponse(
            Request::METHOD_GET,
            sprintf(RestfulUrl::ITEM, $itemId),
            [
                'query' => $query,
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        return $this->getService()->getSerializer()->deserialize($response->getBody()->getContents(), Item::class, 'json');
    }

    /**
     * Get Variation
     *
     * @param int $itemId
     * @param int $variationId
     *
     * @return Exception|ItemVariation|mixed
     * @throws Throwable
     */
    public function getVariation($itemId, $variationId)
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ITEM_VARIATION, $itemId, $variationId));
        if ($response instanceof Exception) {
            return $response;
        }

        return $this->getService()->getSerializer()->deserialize($response->getBody()->getContents(), ItemVariation::class, 'json');
    }

    /**
     * @param int $itemId
     * @param int $variationId
     *
     * @return array|ItemImage[]
     * @throws Throwable
     */
    public function getVariationImages(int $itemId, int $variationId): array
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ITEM_VARIATION_IMAGES, $itemId, $variationId));
        if ($response instanceof Exception) {
            throw $response;
        }

        return $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            sprintf('array<%s>', ItemImage::class),
            'json'
        );
    }

    /**
     * Get Variation Stock
     *
     * @param int  $itemId
     * @param int  $variationId
     * @param bool $flushEntities
     *
     * @return array|Exception|ItemVariationStock[]
     * @throws Throwable
     */
    public function getVariationStock(int $itemId, int $variationId, bool $flushEntities = true)
    {
        $response = $this->getResponse(
            Request::METHOD_GET,
            sprintf(RestfulUrl::ITEM_VARIATION_STOCK, $itemId, $variationId),
            [],
            false,
            false,
            $flushEntities
        );
        if ($response instanceof Exception) {
            throw $response;
        }

        return $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            sprintf('array<%s>', ItemVariationStock::class),
            'json'
        );
    }

    /**
     * Get variation warehouses
     *
     * @param int $itemId
     * @param int $variationId
     *
     * @return array|Exception|ItemVariationWarehouse[]
     * @throws Throwable
     */
    public function getVariationWarehouses($itemId, $variationId)
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ITEM_VARIATION_WAREHOUSES, $itemId, $variationId));
        if ($response instanceof Exception) {
            return $response;
        }

        /* Fix wrong datetime */
        $body = str_replace('-0001-11-30T00:00:00+01:00', '0000-00-00T00:00:00+01:00', $response->getBody()->getContents());
        $body = str_replace('-0001-11-30T00:00:00+00:53', '0000-00-00T00:00:00+01:00', $body);

        return $this->getService()->getSerializer()->deserialize($body, sprintf('array<%s>', ItemVariationWarehouse::class), 'json');
    }

    /**
     * Get Variation Barcodes
     *
     * @param int $itemId
     * @param int $variationId
     *
     * @return array|Exception|ItemVariationBarcode[]
     * @throws Throwable
     */
    public function getVariationBarcodes(int $itemId, int $variationId): array
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ITEM_VARIATION_BARCODES, $itemId, $variationId));
        if ($response instanceof Exception) {
            throw $response;
        }

        return $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            sprintf('array<%s>', ItemVariationBarcode::class),
            'json'
        );
    }

    /**
     * Get All
     *
     * @param       $itemId
     * @param       $variationId
     * @param int   $page
     * @param array $query
     *
     * @return array|Exception|mixed|ItemVariationStockStorageLocation[]
     * @throws Throwable
     */
    public function getVariationStockStorageLocations(int $itemId, int $variationId, $page = 1, $query = [])
    {
        $response = $this->getResponse(
            Request::METHOD_GET,
            sprintf(RestfulUrl::ITEM_VARIATION_STOCK_STORAGE_LOCATIONS, $itemId, $variationId),
            [
                'query' => array_merge(
                    [
                        'page'         => $page,
                        'itemsPerPage' => 200,
                    ],
                    $query
                ),
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        /** @var ItemLocationsResponse $data */
        $data = $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            ItemLocationsResponse::class,
            'json'
        );

        if (true === $data->isIsLastPage()) {
            return $data->getEntries();
        }

        /* Get other pages */
        $merged = $this->getVariationStockStorageLocations($itemId, $variationId, $page + 1, $query);
        if ($merged instanceof Exception) {
            $this->getService()->getLogger()->error(
                'ItemsProvider:getVariationStockStorageLocations got some exception importing more pages',
                [
                    'message' => $merged->getMessage(),
                ]
            );

            $merged = [];
        }

        return array_merge($data->getEntries(), $merged);
    }

    /**
     * Get Variation Sales Prices
     *
     * @param int $itemId
     * @param int $variationId
     *
     * @return array|Exception|ItemVariationSalesPrice[]
     * @throws Throwable
     */
    public function getVariationSalesPrices($itemId, $variationId)
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ITEM_VARIATION_SALES_PRICES, $itemId, $variationId));
        if ($response instanceof Exception) {
            return $response;
        }

        return $this->getService()->getSerializer()->deserialize(
            $response->getBody()->getContents(),
            sprintf('array<%s>', ItemVariationSalesPrice::class),
            'json'
        );
    }

    /**
     * Get Variation Suppliers
     *
     * @param string $itemId
     * @param string $variationId
     *
     * @return array|Exception|mixed|ItemVariationSupplier[]
     * @throws Throwable
     */
    public function getVariationSuppliers($itemId, $variationId)
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ITEM_VARIATION_SUPPLIERS, $itemId, $variationId));
        if ($response instanceof Exception) {
            return $response;
        }

        /* Fix wrong datetime */
        $body = str_replace('-0001-11-30T00:00:00+01:00', '0000-00-00T00:00:00+01:00', $response->getBody()->getContents());
        $body = str_replace('-0001-11-30T00:00:00+00:53', '0000-00-00T00:00:00+01:00', $body);

        return $this->getService()->getSerializer()->deserialize($body, sprintf('array<%s>', ItemVariationSupplier::class), 'json');
    }

    /**
     * Get Sales Price
     *
     * @param int $salePriceId
     *
     * @return mixed|Exception|SalesPrice
     * @throws Throwable
     */
    public function getSalesPrice(int $salePriceId): ?SalesPrice
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::ITEM_SALES_PRICE, $salePriceId));
        if ($response instanceof Exception) {
            throw $response;
        }

        return $this->getService()->getSerializer()->deserialize($response->getBody()->getContents(), SalesPrice::class, 'json');
    }

    /**
     * Get Updated Since
     *
     * @param DateTimeInterface|null $since
     *
     * @return array|Item[]
     * @throws Throwable
     */
    public function getUpdatedSince(?DateTimeInterface $since): array
    {
        $query = [];
        if (null !== $since) {
            $query['updatedBetween'] = $since->getTimestamp();
        } else {
            $query['updatedBetween'] = (new DateTime('2020-01-01'))->getTimestamp();
        }

        $result = $this->getAll(1, $query);
        if ($result instanceof Throwable) {
            throw $result;
        }

        return $result;
    }

    /**
     * Item Variations
     *
     * @param DateTimeInterface|null $since
     *
     * @return array|ItemVariation[]
     * @throws Throwable
     */
    public function getVariationsUpdatedSince(?DateTimeInterface $since): array
    {
        $query = [];
        if (null !== $since) {
            $query['updatedBetween'] = $since->getTimestamp();
        } else {
            $query['updatedBetween'] = (new DateTime('2020-01-01'))->getTimestamp();
        }

        $result = $this->getAllVariations(1, $query);
        if ($result instanceof Throwable) {
            throw $result;
        }

        return $result;
    }

    /**
     * Item variations with relation updated
     *
     * @param DateTimeInterface|null $since
     * @param array                  $with
     *
     * @return array|ItemVariation[]
     * @throws Throwable
     */
    public function getVariationsRelatedUpdatedSince(?DateTimeInterface $since, array $with = []): array
    {
        $query = [];
        if (null !== $since) {
            $query['relatedUpdatedBetween'] = $since->getTimestamp();
        } else {
            $query['relatedUpdatedBetween'] = (new DateTime('2020-01-01'))->getTimestamp();
        }

        if (0 < count($with)) {
            $query['with'] = implode(',', $with);
        }

        $result = $this->getAllVariations(1, $query);
        if ($result instanceof Throwable) {
            throw $result;
        }

        return $result;
    }

    /**
     * Put Stock Correction
     *
     * @param int $itemId
     * @param int $variationId
     * @param int $quantity
     * @param int $warehouseId
     * @param int $storageLocationId
     * @param int $reason
     *
     * @return bool|Exception|mixed|ResponseInterface
     * @throws Throwable
     */
    public function putStockCorrection(
        int $itemId,
        int $variationId,
        $quantity,
        $warehouseId,
        $storageLocationId,
        $reason = Item::REASON_STOCK_CORRECTION
    ) {
        $response = $this->getResponse(
            Request::METHOD_PUT,
            sprintf(RestfulUrl::ITEM_VARIATION_STOCK_CORRECTION, $itemId, $variationId),
            [
                RequestOptions::JSON => [
                    'quantity'          => $quantity,
                    'warehouseId'       => $warehouseId,
                    'storageLocationId' => $storageLocationId,
                    'reasonId'          => $reason,
                ],
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        return true;
    }

    /**
     * Put Stock Correction
     *
     * @param int $itemId
     * @param int $variationId
     * @param int $quantity
     * @param int $warehouseId
     * @param int $storageLocationId
     * @param int $reason
     *
     * @return bool|Exception|mixed|ResponseInterface
     * @throws Throwable
     */
    public function putBookIncomingItems(
        int $itemId,
        int $variationId,
        int $quantity,
        int $warehouseId,
        int $storageLocationId,
        int $reason = Item::REASON_INCOMING_ITEMS
    ) {
        $response = $this->getResponse(
            Request::METHOD_PUT,
            sprintf(RestfulUrl::ITEM_VARIATION_BOOK_INCOMING_ITEMS, $itemId, $variationId),
            [
                RequestOptions::JSON => [
                    'currency'          => 'EUR',
                    'deliveredAt'       => date('c'),
                    'quantity'          => $quantity,
                    'warehouseId'       => $warehouseId,
                    'storageLocationId' => $storageLocationId,
                    'reasonId'          => $reason,
                ],
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        return true;
    }

    /**
     * Stock Redistribution
     *
     * @param int      $itemId
     * @param int      $variationId
     * @param int      $quantity
     * @param int|null $currentStorageLocationId
     * @param int|null $currentWarehouseId
     * @param int      $newStorageLocationId
     * @param int      $newWarehouseId
     * @param int      $reason
     *
     * @return bool|Exception|mixed|ResponseInterface
     * @throws Throwable
     */
    public function putStockRedistribute(
        int $itemId,
        int $variationId,
        int $quantity,
        ?int $currentStorageLocationId,
        ?int $currentWarehouseId,
        int $newStorageLocationId,
        int $newWarehouseId,
        $reason = Item::REASON_STOCK_REDISTRIBUTE
    ) {
        $request = $this->appendVariationVisibilitySettingsToRequest(
            $itemId,
            $variationId,
            [
                'reasonId'                 => $reason,
                'quantity'                 => $quantity,
                'currentStorageLocationId' => $currentStorageLocationId,
                'currentWarehouseId'       => $currentWarehouseId,
                'newStorageLocationId'     => $newStorageLocationId,
                'newWarehouseId'           => $newWarehouseId,
            ]
        );

        if ($request instanceof Exception) {
            return $request;
        }

        $response = $this->getResponse(
            Request::METHOD_PUT,
            sprintf(RestfulUrl::ITEM_VARIATION, $itemId, $variationId),
            [
                RequestOptions::JSON => $request,
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        return true;
    }

    /**
     * Put item field
     *
     * @param int    $itemId
     * @param string $field
     * @param string $value
     *
     * @return Throwable|null
     * @throws Throwable
     */
    public function putItemField(int $itemId, string $field, string $value): ?Throwable
    {
        $response = $this->getResponse(
            Request::METHOD_PUT,
            sprintf(RestfulUrl::ITEM, $itemId),
            [
                RequestOptions::JSON => [
                    $field => $value,
                ],
            ]
        );

        if ($response instanceof Throwable) {
            return $response;
        }

        return null;
    }

    /**
     * Reorder level
     *
     * @param int $itemId
     * @param int $variationId
     * @param int $warehouseId
     * @param int $reorderLevel
     *
     * @return bool|Exception|mixed|ResponseInterface
     * @throws Throwable
     */
    public function putReorderLevel($itemId, $variationId, $warehouseId, $reorderLevel)
    {
        $response = $this->getResponse(
            Request::METHOD_PUT,
            sprintf(RestfulUrl::ITEM_VARIATION_WAREHOUSES_WAREHOUSE, $itemId, $variationId, $warehouseId),
            [
                RequestOptions::JSON => [
                    'reorderLevel' => $reorderLevel,
                ],
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        return true;
    }

    /**
     * Reorder level
     *
     * @param int $itemId
     * @param int $variationId
     * @param int $warehouseId
     * @param int $reorderLevel
     *
     * @return bool|Exception|mixed|ResponseInterface
     * @throws Throwable
     */
    public function postReorderLevel($itemId, $variationId, $warehouseId, $reorderLevel)
    {
        $response = $this->getResponse(
            Request::METHOD_POST,
            sprintf(RestfulUrl::ITEM_VARIATION_WAREHOUSES, $itemId, $variationId),
            [
                RequestOptions::FORM_PARAMS => [
                    'warehouseId'  => $warehouseId,
                    'reorderLevel' => $reorderLevel,
                ],
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        return true;
    }

    /**
     * Shop position
     *
     * @param int $itemId
     * @param int $variationId
     * @param int $position
     *
     * @return bool|Exception|mixed|ResponseInterface
     * @throws Throwable
     */
    public function putShopPosition($itemId, $variationId, $position)
    {
        $request = $this->appendVariationVisibilitySettingsToRequest(
            $itemId,
            $variationId,
            [
                'position' => $position,
            ]
        );

        if ($request instanceof Exception) {
            return $request;
        }

        $response = $this->getResponse(
            Request::METHOD_PUT,
            sprintf(RestfulUrl::ITEM_VARIATION, $itemId, $variationId),
            [
                RequestOptions::JSON => $request,
            ]
        );

        if ($response instanceof Exception) {
            return $response;
        }

        return true;
    }

    /**
     * Append Variation Visibility Settings
     *
     * @param int   $itemId
     * @param int   $variationId
     * @param array $request
     *
     * @return array|Exception|mixed|ItemVariation
     * @throws Throwable
     */
    private function appendVariationVisibilitySettingsToRequest(int $itemId, int $variationId, array $request)
    {
        $variation = $this->getVariation($itemId, $variationId);
        if ($variation instanceof Exception) {
            return $variation;
        }

        if (null !== $variation->isIsInvisibleIfNetStockIsNotPositive()) {
            $request['isInvisibleIfNetStockIsNotPositive'] = $variation->isIsInvisibleIfNetStockIsNotPositive();
        }

        if (null !== $variation->isIsVisibleIfNetStockIsPositive()) {
            $request['isVisibleIfNetStockIsPositive'] = $variation->isIsVisibleIfNetStockIsPositive();
        }

        return $request;
    }
}