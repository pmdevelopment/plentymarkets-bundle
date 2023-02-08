<?php

namespace PM\PlentyMarketsBundle\Component\Provider;

use PM\PlentyMarketsBundle\Component\Model\Fulfilment\Picklist;
use PM\PlentyMarketsBundle\Component\Model\Order\Order;
use PM\PlentyMarketsBundle\Component\RestfulUrl;
use Symfony\Component\HttpFoundation\Request;
use Throwable;

class FulfilmentProvider extends BaseProvider
{
    public function getById(int $picklistId): Throwable|Picklist
    {
        $response = $this->getResponse(Request::METHOD_GET, sprintf(RestfulUrl::FULFILMENT_PICKLIST, $picklistId));

        if ($response instanceof Throwable) {
            return $response;
        }

        $body = $this->getBodyContentsWithFixedDate($response);

        try {
            return $this->getService()->getSerializer()->deserialize($body, Picklist::class, 'json');
        } catch (Throwable $throwable) {
            return $throwable;
        }
    }
}