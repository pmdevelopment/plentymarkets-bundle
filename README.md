# Plentymarketsbundle

## Config

### services.yaml

Mongo:


    PM\PlentyMarketsBundle\Services\RestfulService:
        arguments:
            $accessTokenRepository: '@PM\PlentyMarketsBundle\DocumentRepository\AccessTokenRepository'
            $apiHitsRepository: '@PM\PlentyMarketsBundle\DocumentRepository\ApiHitsRepository'
            $apiLockRepository: '@PM\PlentyMarketsBundle\DocumentRepository\ApiLockRepository'
            $limitHistoryRepository: '@PM\PlentyMarketsBundle\DocumentRepository\LimitHistoryRepository'
            $serializer: '@jms_serializer.serializer'
            $objectManager: '@Doctrine\ODM\MongoDB\DocumentManager'
            $logger: '@logger'
            $parameterGuzzleVerifySsl: '%pm__plenty_market.configuration.guzzle.verify_ssl%'

Sql:


    PM\PlentyMarketsBundle\Services\RestfulService:
        arguments:
            $accessTokenRepository: '@PM\PlentyMarketsBundle\Repository\AccessTokenRepository'
            $apiHitsRepository: '@PM\PlentyMarketsBundle\Repository\ApiHitsRepository'
            $apiLockRepository: '@PM\PlentyMarketsBundle\Repository\ApiLockRepository'
            $limitHistoryRepository: '@PM\PlentyMarketsBundle\Repository\LimitHistoryRepository'
            $serializer: '@jms_serializer.serializer'
            $objectManager: '@Doctrine\ORM\EntityManagerInterface'
            $logger: '@logger'
            $parameterGuzzleVerifySsl: '%pm__plenty_market.configuration.guzzle.verify_ssl%'