<?php

namespace ContainerLypjwq3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEncounterRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\EncounterRepository' shared autowired service.
     *
     * @return \App\Repository\EncounterRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/EncounterRepository.php';

        return $container->privates['App\\Repository\\EncounterRepository'] = new \App\Repository\EncounterRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
