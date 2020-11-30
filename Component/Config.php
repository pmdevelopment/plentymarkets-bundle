<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 12.07.2017
 * Time: 10:05
 */

namespace PM\PlentyMarketsBundle\Component;

use PM\PlentyMarketsBundle\Component\Helper\ServiceHelper;
use PM\PlentyMarketsBundle\Services\RestfulService;


/**
 * Class Config
 *
 * @package PM\PlentyMarketsBundle\Component
 */
class Config
{
    /**
     * @var bool
     */
    private $priority = false;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var float
     */
    private $limitLock;

    /**
     * @var float
     */
    private $shortLimitLock;

    /**
     * Config constructor.
     *
     * @param string $uri
     * @param string $username
     * @param string $password
     * @param float  $limitLock
     * @param float  $shortLimitLock
     * @param bool   $priority
     */
    public function __construct($uri, $username, $password, float $limitLock, float $shortLimitLock, bool $priority = false)
    {
        $this->uri = $uri;
        $this->username = $username;
        $this->password = $password;
        $this->limitLock = $limitLock;
        $this->shortLimitLock = $shortLimitLock;

        $this->priority = $priority;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return float
     */
    public function getLimitLock()
    {
        return $this->limitLock;
    }

    /**
     * @return float
     */
    public function getShortLimitLock(): float
    {
        return $this->shortLimitLock;
    }

    /**
     * @return bool
     */
    public function isPriority(): bool
    {
        return $this->priority;
    }

    /**
     * @param bool $priority
     *
     * @return Config
     */
    public function setPriority(bool $priority): Config
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get API Id
     *
     * @return string
     */
    public function getApiId()
    {
        return ServiceHelper::createApiId(RestfulService::getBaseUri($this->getUri()), $this->getUsername(), $this->getPassword());
    }

}