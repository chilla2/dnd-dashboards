<?php

namespace ContainerIrp60uT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSessionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SessionController' shared autowired service.
     *
     * @return \App\Controller\SessionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SessionController.php';

        $container->services['App\\Controller\\SessionController'] = $instance = new \App\Controller\SessionController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\SessionController', $container));

        return $instance;
    }
}
