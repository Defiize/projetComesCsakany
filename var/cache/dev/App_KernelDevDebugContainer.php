<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7HxEIaC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7HxEIaC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7HxEIaC.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7HxEIaC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7HxEIaC\App_KernelDevDebugContainer([
    'container.build_hash' => '7HxEIaC',
    'container.build_id' => '596737fc',
    'container.build_time' => 1646650504,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7HxEIaC');
