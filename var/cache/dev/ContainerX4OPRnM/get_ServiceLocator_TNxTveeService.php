<?php

namespace ContainerX4OPRnM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TNxTveeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TNxTvee' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TNxTvee'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'flasher' => ['services', 'flasher', 'getFlasherService', false],
            'repo' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'doctrine' => '?',
            'flasher' => '?',
            'repo' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
