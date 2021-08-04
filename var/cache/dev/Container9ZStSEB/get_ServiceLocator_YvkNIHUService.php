<?php

namespace Container9ZStSEB;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YvkNIHUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yvkNIHU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yvkNIHU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'npcRepository' => ['privates', 'App\\Repository\\NpcRepository', 'getNpcRepositoryService', false],
        ], [
            'npcRepository' => 'App\\Repository\\NpcRepository',
        ]);
    }
}