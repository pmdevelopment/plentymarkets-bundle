<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 25.07.2017
 * Time: 10:50
 */

namespace PM\PlentyMarketsBundle\Component\Traits;

use PM\PlentyMarketsBundle\Services\RestfulService;


/**
 * Trait HasRestfulServiceTrait
 *
 * @package PM\PlentyMarketsBundle\Component\Traits
 * @deprecated
 */
trait HasRestfulServiceTrait
{
    /**
     * @var RestfulService
     */
    private $restfulService;

    /**
     * @return RestfulService
     */
    public function getRestfulService()
    {
        return $this->restfulService;
    }

    /**
     * @param RestfulService $restfulService
     *
     * @return HasRestfulServiceTrait
     */
    public function setRestfulService($restfulService)
    {
        $this->restfulService = $restfulService;

        return $this;
    }

}