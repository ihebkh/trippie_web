<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerL7iM3Ci\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerL7iM3Ci/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerL7iM3Ci.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerL7iM3Ci\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerL7iM3Ci\App_KernelDevDebugContainer([
    'container.build_hash' => 'L7iM3Ci',
    'container.build_id' => 'baa26ccc',
    'container.build_time' => 1682251783,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerL7iM3Ci');
