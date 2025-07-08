<?php

namespace PM\PlentyMarketsBundle\DocumentRepository;

use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\ODM\MongoDB\Query\Builder;
use PM\PlentyMarketsBundle\Component\Interfaces\ApiLockRepositoryInterface;
use PM\PlentyMarketsBundle\Document\ApiLock;

class ApiLockRepository extends ServiceDocumentRepository implements ApiLockRepositoryInterface
{

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ApiLock::class);
    }

    public function hasActive(string $api): bool
    {
        return $this->getActive($api) !== null;
    }

    public function getActive(string $api): ?ApiLock
    {
        $qb = $this->createQueryBuilderForActive($api);

        $result = $qb->getQuery()->getSingleResult();
        return null;
    }

    public function findActive(): array
    {
        $qb = $qb->createQueryBuilderForActive();

        return $qb->getQuery()->execute()->toArray();
    }

    public function createQueryBuilderForActive($alias = 'api_lock', $api = null): Builder
    {
        $qb = $this->createQueryBuilder();

        $qb->field('deleted')->equals(false)
            ->field('validFrom')->lte(new \DateTime())
            ->addOr($qb->expr()->field('validUntil')->exists(false))
            ->addOr($qb->expr()->field('validUntil')->gt(new \DateTime()));

        if ($api !== null) {
            $qb->field('api')->equals($api);
        }

        $qb->sort('validUntil', 'desc');

        return $qb;
    }
}