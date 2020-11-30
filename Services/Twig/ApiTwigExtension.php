<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 22.02.2018
 * Time: 11:23
 */

namespace PM\PlentyMarketsBundle\Services\Twig;

use PM\PlentyMarketsBundle\Entity\ApiLock;
use PM\PlentyMarketsBundle\Repository\ApiLockRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;


/**
 * Class ApiTwigExtension
 *
 * @package PM\PlentyMarketsBundle\Services\Twig
 */
class ApiTwigExtension extends AbstractExtension
{
    /**
     * @var ApiLockRepository
     */
    private $apiLockRepository;

    /**
     * @return array|TwigFunction[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction(
                'pm_plenty_api_get_locks_active',
                [
                    $this,
                    'getActiveLocks',
                ]
            ),
        ];
    }

    /**
     * Get Active Locks
     *
     * @return array|ApiLock[]
     */
    public function getActiveLocks()
    {
        return $this->apiLockRepository->findActive();
    }

}