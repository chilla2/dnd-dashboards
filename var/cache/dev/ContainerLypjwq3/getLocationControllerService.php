<?php

namespace ContainerLypjwq3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocationControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LocationController' shared autowired service.
     *
     * @return \App\Controller\LocationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LocationController.php';

        $container->services['App\\Controller\\LocationController'] = $instance = new \App\Controller\LocationController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\LocationController', $container));

        return $instance;
    }
}
