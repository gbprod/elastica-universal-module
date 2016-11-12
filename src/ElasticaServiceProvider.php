<?php

namespace GBProd;

use Elastica\Client;
use Interop\Container\ContainerInterface;
use Interop\Container\ServiceProvider;

/**
 * Service provider for Elastica
 *
 * @author GBProd <contact@gb-prod.fr>
 */
class ElasticaServiceProvider implements ServiceProvider
{
    /**
     * @var string|null
     */
    private $suffix;

    /**
     * @param string|null $suffix
     */
    public function __construct($suffix = null)
    {
        $this->suffix = $suffix ? '.'.$suffix : '';
    }

    /**
     * {inheritdoc}
     */
    public function getServices()
    {
        return [
            Client::class.$this->suffix => function(ContainerInterface $container) {
                return new Client([
                    'host' => $container->get(Client::class.$this->suffix.'.host'),
                    'port' => $container->get(Client::class.$this->suffix.'.port')
                ]);
            }
        ];
    }
}
