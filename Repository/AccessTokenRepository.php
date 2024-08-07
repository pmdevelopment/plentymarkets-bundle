<?php

namespace PM\PlentyMarketsBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use PM\PlentyMarketsBundle\Entity\AccessToken;

/**
 * AccessTokenRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AccessTokenRepository extends ServiceEntityRepository
{
    /**
     * AccessTokenRepository constructor.
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccessToken::class);
    }

    /**
     * Find One By Api
     *
     * @param string $api
     *
     * @return mixed|null
     */
    public function findOneByApi($api)
    {
        $tokens = $this->findBy(
            [
                'api' => $api,
            ],
            [
                'validUntil' => 'desc',
            ],
            1
        );

        if (0 === count($tokens)) {
            return null;
        }

        $token = reset($tokens);

        if ($token->getValidUntil() > (new \DateTime())) {
            return $token;
        }

        return null;
    }
}
