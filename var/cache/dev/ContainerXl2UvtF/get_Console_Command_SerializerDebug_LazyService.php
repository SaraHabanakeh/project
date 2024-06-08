<?php

namespace ContainerXl2UvtF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Console_Command_SerializerDebug_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.console.command.serializer_debug.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/LazyCommand.php';

        return $container->privates['.console.command.serializer_debug.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('debug:serializer', [], 'Display serialization information for classes', false, #[\Closure(name: 'console.command.serializer_debug', class: 'Symfony\\Component\\Serializer\\Command\\DebugCommand')] fn (): \Symfony\Component\Serializer\Command\DebugCommand => ($container->privates['console.command.serializer_debug'] ?? $container->load('getConsole_Command_SerializerDebugService')));
    }
}
