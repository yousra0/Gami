<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXkRfxSi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXkRfxSi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXkRfxSi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXkRfxSi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXkRfxSi\App_KernelDevDebugContainer([
    'container.build_hash' => 'XkRfxSi',
    'container.build_id' => 'ef6d8f76',
    'container.build_time' => 1708195996,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXkRfxSi');
