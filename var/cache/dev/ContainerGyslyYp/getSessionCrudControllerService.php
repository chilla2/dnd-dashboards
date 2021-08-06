<?php

namespace ContainerGyslyYp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSessionCrudControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\SessionCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\SessionCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Contracts/Controller/CrudControllerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Controller/AbstractCrudController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/SessionCrudController.php';

        $container->services['App\\Controller\\Admin\\SessionCrudController'] = $instance = new \App\Controller\Admin\SessionCrudController();

        $instance->setContainer(($container->privates['.service_locator.opmh_Hv'] ?? $container->load('get_ServiceLocator_OpmhHvService'))->withContext('App\\Controller\\Admin\\SessionCrudController', $container));

        return $instance;
    }
}
