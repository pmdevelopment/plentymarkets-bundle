<?php


namespace PM\PlentyMarketsBundle\Component\Provider;

use PM\PlentyMarketsBundle\Component\Model\Backend\User;
use PM\PlentyMarketsBundle\Component\RestfulUrl;
use Symfony\Component\HttpFoundation\Request;
use Throwable;

/**
 * Class BackendProvider
 *
 * @package PM\PlentyMarketsBundle\Component\Provider
 */
class BackendProvider extends BaseProvider
{

    /**
     * Get Users
     *
     * @return array|User[]|Throwable
     * @throws Throwable
     */
    public function getUsers()
    {
        $response = $this->getResponse(
            Request::METHOD_GET,
            RestfulUrl::BACKEND_USERS
        );

        if ($response instanceof Throwable) {
            return $response;
        }

        return $this->getService()->getSerializer()->deserialize($response->getBody()->getContents(), sprintf('array<%s>', User::class), 'json');
    }

}