<?php

namespace ContainerX4OPRnM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OY4vFbWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oY4vFbW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oY4vFbW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'voitureRepository' => ['privates', 'App\\Repository\\VoitureRepository', 'getVoitureRepositoryService', true],
        ], [
            'voitureRepository' => 'App\\Repository\\VoitureRepository',
        ]);
    }
}
