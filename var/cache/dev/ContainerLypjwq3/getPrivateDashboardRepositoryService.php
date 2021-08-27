<?php

namespace ContainerLypjwq3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPrivateDashboardRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\PrivateDashboardRepository' shared autowired service.
     *
     * @return \App\Repository\PrivateDashboardRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/PrivateDashboardRepository.php';

        return $container->privates['App\\Repository\\PrivateDashboardRepository'] = new \App\Repository\PrivateDashboardRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
