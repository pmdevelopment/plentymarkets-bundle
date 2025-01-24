<?php

namespace PM\PlentyMarketsBundle\Component\Interfaces;

use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;

interface AccessTokenRepositoryInterface
{
    public function findOneByApi(string $api): mixed;
}