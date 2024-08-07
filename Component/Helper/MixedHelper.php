<?php


namespace PM\PlentyMarketsBundle\Component\Helper;

use ReflectionClass;
use ReflectionException;

/**
 * Class MixedHelper
 *
 * @package PM\PlentyMarketsBundle\Component\Helper
 */
class MixedHelper
{
    /**
     * Get Constant Values By Prefix
     *
     *
     */
    public static function getConstantValuesByPrefix(string $className, string $prefix): array
    {
        $prefixLength = strlen($prefix);
        $result = [];

        try {
            $reflection = new ReflectionClass($className);
        } catch (ReflectionException) {
            return [];
        }

        foreach ($reflection->getConstants() as $constKey => $constValue) {
            if ($prefix === substr($constKey, 0, $prefixLength)) {
                $result[] = $constValue;
            }
        }

        return $result;
    }
}