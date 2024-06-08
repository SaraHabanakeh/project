<?php

namespace ContainerLB1KPLw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CzJQNbsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.czJQNbs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.czJQNbs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'bookRepository' => ['privates', 'App\\Repository\\BookRepository', 'getBookRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'bookRepository' => 'App\\Repository\\BookRepository',
            'doctrine' => '?',
        ]);
    }
}
