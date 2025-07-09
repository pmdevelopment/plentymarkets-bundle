<?php


namespace PM\PlentyMarketsBundle\Component\Request\Payload;

use PM\PlentyMarketsBundle\Component\Request\Payload;
use PM\PlentyMarketsBundle\Component\RestfulUrl;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class Comments
 *
 * @package PM\PlentyMarketsBundle\Component\Request\Payload
 */
class Comments
{

    /**
     * Post for order
     *
     *
     */
    public static function postForOrder(int $orderId, string $text): Payload
    {
        $payload = new Payload();
        $payload
            ->setResource(RestfulUrl::COMMENTS)
            ->setMethod(Request::METHOD_POST)
            ->setBody(
                [
                    'referenceType'       => 'order',
                    'referenceValue'      => $orderId,
                    'text'                => $text,
                    'userId'              => $_ENV['APP_PLENTY_USER_ID'],
                    'isVisibleForContact' => false,
                ]
            );

        return $payload;
    }

}