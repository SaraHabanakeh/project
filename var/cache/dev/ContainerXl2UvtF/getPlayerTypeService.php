<?php

namespace ContainerXl2UvtF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPlayerTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Card\PlayerType' shared autowired service.
     *
     * @return \App\Card\PlayerType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Card/PlayerType.php';

        return $container->privates['App\\Card\\PlayerType'] = new \App\Card\PlayerType();
    }
}
