<?php

namespace ContainerIrp60uT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Uok6LHyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.uok6LHy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.uok6LHy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'locationRepository' => ['privates', 'App\\Repository\\LocationRepository', 'getLocationRepositoryService', false],
        ], [
            'locationRepository' => 'App\\Repository\\LocationRepository',
        ]);
    }
}
