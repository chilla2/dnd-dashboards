<?php

namespace ContainerIrp60uT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_83t1iHBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.83t1iHB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.83t1iHB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'item' => ['privates', '.errored..service_locator.83t1iHB.App\\Entity\\Item', NULL, 'Cannot autowire service ".service_locator.83t1iHB": it references class "App\\Entity\\Item" but no such service exists.'],
        ], [
            'item' => 'App\\Entity\\Item',
        ]);
    }
}
