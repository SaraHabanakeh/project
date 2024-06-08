<?php

namespace ContainerW5xEgpN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1kKMm9PService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.1kKMm9P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1kKMm9P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\BookController::apiIndex' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController::apiShow' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController::create' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController::delete' => ['privates', '.service_locator.czJQNbs', 'get_ServiceLocator_CzJQNbsService', true],
            'App\\Controller\\BookController::edit' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController::index' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController::show' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\BookController:apiIndex' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController:apiShow' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController:create' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController:delete' => ['privates', '.service_locator.czJQNbs', 'get_ServiceLocator_CzJQNbsService', true],
            'App\\Controller\\BookController:edit' => ['privates', '.service_locator.o6sN0hZ', 'get_ServiceLocator_O6sN0hZService', true],
            'App\\Controller\\BookController:index' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'App\\Controller\\BookController:show' => ['privates', '.service_locator.E86grY4', 'get_ServiceLocator_E86grY4Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\BookController::apiIndex' => '?',
            'App\\Controller\\BookController::apiShow' => '?',
            'App\\Controller\\BookController::create' => '?',
            'App\\Controller\\BookController::delete' => '?',
            'App\\Controller\\BookController::edit' => '?',
            'App\\Controller\\BookController::index' => '?',
            'App\\Controller\\BookController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\BookController:apiIndex' => '?',
            'App\\Controller\\BookController:apiShow' => '?',
            'App\\Controller\\BookController:create' => '?',
            'App\\Controller\\BookController:delete' => '?',
            'App\\Controller\\BookController:edit' => '?',
            'App\\Controller\\BookController:index' => '?',
            'App\\Controller\\BookController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
