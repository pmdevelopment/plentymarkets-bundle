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
     * Config constructor.
     *
     * @param string $uri
     * @param string $username
     * @param string $password
     */
    public function __construct(
        private $uri,
        private $username,
        private $password,
        private readonly float $limitLock,
        private readonly float $shortLimitLock,
        private bool $priority = false
    ){
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

    public function getShortLimitLock(): float
    {
        return $this->shortLimitLock;
    }

    public function isPriority(): bool
    {
        return $this->priority;
    }

    /**
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