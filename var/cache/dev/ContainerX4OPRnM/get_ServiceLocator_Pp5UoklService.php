<?php

namespace ContainerX4OPRnM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Pp5UoklService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pp5Uokl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pp5Uokl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'Normalizer' => '?',
            'doctrine' => '?',
        ]);
    }
}
