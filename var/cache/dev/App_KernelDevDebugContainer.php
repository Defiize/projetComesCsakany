<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUAThN5I\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUAThN5I/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUAThN5I.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUAThN5I\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUAThN5I\App_KernelDevDebugContainer([
    'container.build_hash' => 'UAThN5I',
    'container.build_id' => 'b1f37cb3',
    'container.build_time' => 1646731984,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUAThN5I');
