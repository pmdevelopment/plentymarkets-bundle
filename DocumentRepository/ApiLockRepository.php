<?php

namespace PM\PlentyMarketsBundle\DocumentRepository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\ODM\MongoDB\Query\Builder;
use PM\PlentyMarketsBundle\Document\ApiLock;

class ApiLockRepository extends ServiceDocumentRepository
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
        $qb = $qb->createQueryBuilderForActive();

        $builder
            ->field('api_lock.api')->equals($api);

        $result = $qb->getQuery()->getSingleResult();

        $result = $builder->getQuery()->getResult();
        if (0 < count($result)) {
            return $result[0];
        }

        return null;
    }

    public function findActive(): array
    {
        $qb = $qb->createQueryBuilderForActive();

        return $qb->getQuery()->execute()->toArray();
    }

    public function createQueryBuilderForActive($alias = 'api_lock'): Builder
    {
        $qb = $this->createQueryBuilder();

        $qb->field('deleted')->equals(false)
            ->field('validFrom')->lte(new DateTime())
            ->addOr($qb->expr()->field('validUntil')->exists(false))
            ->addOr($qb->expr()->field('validUntil')->gt(new DateTime()));

        if ($api !== null) {
            $qb->field('api')->equals($api);
        }

        $qb->sort('validUntil', 'desc');
    }
}