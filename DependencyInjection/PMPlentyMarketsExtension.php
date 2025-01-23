<?php

namespace PM\PlentyMarketsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class PMPlentyMarketsExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $parameters = $this->getParameters($config, 'pm__plenty_market.configuration');
        foreach ($parameters as $key => $value) {
            $container->setParameter($key, $value);
        }

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }

    private function getParameters(array $config, $prefix): array
    {
        $result = [];

        foreach ($config as $key => $value) {
            $index = sprintf('%s.%s', $prefix, $key);

            if (true === is_array($value)) {
                $result = array_merge($result, $this->getParameters($value, $index));
            } else {
                $result[$index] = $value;
            }
        }

        return $result;
    }
}
