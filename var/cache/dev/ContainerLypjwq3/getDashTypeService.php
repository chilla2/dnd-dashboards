<?php

namespace ContainerLypjwq3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\DashType' shared autowired service.
     *
     * @return \App\Form\DashType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/DashType.php';

        return $container->privates['App\\Form\\DashType'] = new \App\Form\DashType();
    }
}
