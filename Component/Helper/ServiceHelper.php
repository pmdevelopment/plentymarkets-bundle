<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 09.01.2018
 * Time: 11:06
 */

namespace PM\PlentyMarketsBundle\Component\Helper;

use PM\PlentyMarketsBundle\Component\Config;
use PM\PlentyMarketsBundle\Services\RestfulService;


/**
 * Class ServiceHelper
 *
 * @package PM\PlentyMarketsBundle\Component\Helper
 */
class ServiceHelper
{
    /**
     * Get API Id
     *
     * @param string $uri
     * @param string $username
     * @param string $password
     *
     * @return string
     */
    public static function createApiId($uri, $username, $password)
    {
        return substr(hash('sha256', sprintf('%s_%s_%s', $uri, $username, $password)), 1, 5);
    }

    /**
     * Get API Id
     *
     * @param Config $config
     *
     * @return string
     */
    public static function getApiId(Config $config)
    {
        return self::createApiId(RestfulService::getBaseUri($config->getUri()), $config->getUsername(), $config->getPassword());
    }
}