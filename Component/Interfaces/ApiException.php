<?php


namespace PM\PlentyMarketsBundle\Component\Interfaces;

/**
 * Interface ApiException
 *
 * @package PM\PlentyMarketsBundle\Component\Interfaces
 */
interface ApiException
{

    /**
     * Get Code
     */
    public function getInternalCode(): int;

}