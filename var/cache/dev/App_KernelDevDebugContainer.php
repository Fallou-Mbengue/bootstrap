<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVI2lSZm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVI2lSZm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVI2lSZm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVI2lSZm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVI2lSZm\App_KernelDevDebugContainer([
    'container.build_hash' => 'VI2lSZm',
    'container.build_id' => 'c8fb8b29',
    'container.build_time' => 1623882970,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVI2lSZm');
