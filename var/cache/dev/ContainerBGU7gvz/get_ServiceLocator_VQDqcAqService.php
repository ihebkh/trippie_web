<?php

namespace ContainerBGU7gvz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VQDqcAqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VQDqcAq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VQDqcAq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', '.errored.s0lnC3h', NULL, 'Cannot determine controller argument for "App\\Controller\\ReservationmobileController::getReservation()": the $repo argument is type-hinted with the non-existent class or interface: "App\\Controller\\ReservationRepository". Did you forget to add a use statement?'],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
        ], [
            'repo' => '?',
            'serializer' => '?',
        ]);
    }
}
