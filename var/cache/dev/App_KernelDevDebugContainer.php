<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSKVxvfl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSKVxvfl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSKVxvfl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSKVxvfl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSKVxvfl\App_KernelDevDebugContainer([
    'container.build_hash' => 'SKVxvfl',
    'container.build_id' => '0ad8a58a',
    'container.build_time' => 1733485126,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSKVxvfl');