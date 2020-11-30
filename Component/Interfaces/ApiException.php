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
     *
     * @return int
     */
    public function getInternalCode(): int;

}