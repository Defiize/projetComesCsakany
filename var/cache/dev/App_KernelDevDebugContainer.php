<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHvwSCVq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHvwSCVq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerHvwSCVq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerHvwSCVq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerHvwSCVq\App_KernelDevDebugContainer([
    'container.build_hash' => 'HvwSCVq',
    'container.build_id' => '922048e2',
    'container.build_time' => 1646908308,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHvwSCVq');
