<?php

namespace ContainerIrp60uT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getItemTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ItemType' shared autowired service.
     *
     * @return \App\Form\ItemType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ItemType.php';

        return $container->privates['App\\Form\\ItemType'] = new \App\Form\ItemType();
    }
}
