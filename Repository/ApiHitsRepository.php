<?php

namespace PM\PlentyMarketsBundle\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Query\Parameter;
use Doctrine\Persistence\ManagerRegistry;
use PM\PlentyMarketsBundle\Component\Model\ApiHitsStatisticModel;
use PM\PlentyMarketsBundle\Entity\ApiHits;

/**
 * ApiHitsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ApiHitsRepository extends ServiceEntityRepository
{
    /**
     * ApiHitsRepository constructor.
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ApiHits::class);
    }

    /**
     * Find Current
     *
     * @param string $apiId
     *
     * @return null|object|ApiHits
     */
    public function findCurrent($apiId)
    {
        return $this->findOneBy(
            [
                'apiId' => $apiId,
                'day' => new \DateTime(),
            ]
        );
    }

    /**
     * Find By Last 14 Days
     *
     * @param string $apiId
     *
     * @return array|ApiHitsStatisticModel[]
     */
    public function findByLast14Days($apiId)
    {
        $fourteenDaysAgo = new \DateTime('-14 days');

        $codes = ApiHits::getResponseCodesAvailable();

        $builder = $this->createQueryBuilder('api_hits');
        $builder
            ->select('api_hits.day')
            ->where('api_hits.apiId = :api_id')
            ->andWhere('api_hits.day >= :start')
            ->orderBy('api_hits.day', 'asc')
            ->groupBy('api_hits.day')
            ->setParameters(
                new ArrayCollection(
                    [
                        new Parameter('api_id', $apiId),
                        new Parameter('start', $fourteenDaysAgo),
                    ]
                )
            );

        foreach ($codes as $code) {
            $builder->addSelect(sprintf('SUM(api_hits.responseCode%s) as cnt_%s', ucfirst($code), $code));
        }

        $objects = [];
        foreach ($builder->getQuery()->getResult() as $array) {
            foreach ($codes as $code) {
                $object = new ApiHitsStatisticModel();
                $object
                    ->setTime($array['day'])
                    ->setCode($code)
                    ->setCount($array[sprintf('cnt_%s', $code)]);

                $objects[] = $object;
            }
        }

        return $objects;
    }
}
