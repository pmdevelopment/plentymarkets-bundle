<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 19.02.2018
 * Time: 16:48
 */

namespace PM\PlentyMarketsBundle\Component\Traits;

/**
 * Trait HasConstantsTrait
 *
 * @package PM\PlentyMarketsBundle\Component\Traits
 */
trait HasConstantsTrait
{

    /**
     * Get Constant Name
     *
     * @param int $typeId
     *
     * @return int|null|string
     * @throws \ReflectionException
     */
    public static function getConstantByValue($typeId)
    {
        $reflection = new \ReflectionClass(self::class);
        foreach ($reflection->getConstants() as $constantName => $constantValue) {
            if ($typeId === $constantValue) {
                return $constantName;
            }
        }

        return null;
    }
}