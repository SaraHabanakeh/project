<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ9CgAcj\App_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ9CgAcj/App_KernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerQ9CgAcj.legacy');

    return;
}

if (!\class_exists(App_KernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerQ9CgAcj\App_KernelTestDebugContainer::class, App_KernelTestDebugContainer::class, false);
}

return new \ContainerQ9CgAcj\App_KernelTestDebugContainer([
    'container.build_hash' => 'Q9CgAcj',
    'container.build_id' => '54f8220f',
    'container.build_time' => 1717334050,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ9CgAcj');
