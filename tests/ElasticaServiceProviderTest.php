<?php

namespace Tests\GBProd;

use Elastica\Client;
use GBProd\ElasticaServiceProvider;
use Interop\Container\ContainerInterface;

/**
 * Tests for ElasticaServiceProvider
 *
 * @author GBProd <contact@gb-prod.fr>
 */
class ElasticaServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testCreateService()
    {
        $testedInstance = new ElasticaServiceProvider();

        $container = $this->prophesize(ContainerInterface::class);
        $container->get(Client::class.'.host')->willReturn('localhost');
        $container->get(Client::class.'.port')->willReturn(9200);

        $services = $testedInstance->getServices();

        $client = $services[Client::class]($container->reveal());

        $this->assertInstanceOf(Client::class, $client);
        $this->assertEquals('localhost', $client->getConfig('host'));
        $this->assertEquals(9200, $client->getConfig('port'));
    }

    public function testCreateServiceWithPrefix()
    {
        $testedInstance = new ElasticaServiceProvider('prefix');

        $container = $this->prophesize(ContainerInterface::class);
        $container->get(Client::class.'.prefix.host')->willReturn('localhost');
        $container->get(Client::class.'.prefix.port')->willReturn(9200);

        $services = $testedInstance->getServices();

        $client = $services[Client::class.'.prefix']($container->reveal());

        $this->assertInstanceOf(Client::class, $client);
        $this->assertEquals('localhost', $client->getConfig('host'));
        $this->assertEquals(9200, $client->getConfig('port'));
    }
}
