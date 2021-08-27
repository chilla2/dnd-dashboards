<?php

namespace ContainerDn4mnS5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNpcControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\NpcController' shared autowired service.
     *
     * @return \App\Controller\NpcController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/NpcController.php';

        $container->services['App\\Controller\\NpcController'] = $instance = new \App\Controller\NpcController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\NpcController', $container));

        return $instance;
    }
}
