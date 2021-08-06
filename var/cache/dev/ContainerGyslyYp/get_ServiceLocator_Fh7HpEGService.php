<?php

namespace ContainerGyslyYp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Fh7HpEGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Fh7HpEG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Fh7HpEG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'dashboardRepository' => ['privates', 'App\\Repository\\DashboardRepository', 'getDashboardRepositoryService', true],
        ], [
            'dashboardRepository' => 'App\\Repository\\DashboardRepository',
        ]);
    }
}
