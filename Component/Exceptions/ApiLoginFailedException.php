<?php


namespace PM\PlentyMarketsBundle\Component\Exceptions;


use Exception;
use PM\PlentyMarketsBundle\Component\Helper\ErrorHelper;
use PM\PlentyMarketsBundle\Component\Interfaces\ApiException;
use Throwable;

/**
 * Class ApiLoginFailedException
 *
 * @package PM\PlentyMarketsBundle\Component\Exceptions
 */
class ApiLoginFailedException extends Exception implements Throwable, ApiException
{
    /**
     * @return int
     */
    public function getInternalCode(): int
    {
        return ErrorHelper::CODE_LOGIN_FAILED;
    }

}