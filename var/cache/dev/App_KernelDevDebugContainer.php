<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMrucRKX\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMrucRKX/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMrucRKX.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMrucRKX\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMrucRKX\App_KernelDevDebugContainer([
    'container.build_hash' => 'MrucRKX',
    'container.build_id' => 'bdf0085e',
    'container.build_time' => 1681604697,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMrucRKX');
