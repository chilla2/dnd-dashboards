<?php

namespace ContainerDn4mnS5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOtherControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OtherController' shared autowired service.
     *
     * @return \App\Controller\OtherController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/OtherController.php';

        $container->services['App\\Controller\\OtherController'] = $instance = new \App\Controller\OtherController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\OtherController', $container));

        return $instance;
    }
}
