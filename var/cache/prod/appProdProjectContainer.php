<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG0xyvk0\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG0xyvk0/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerG0xyvk0.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerG0xyvk0\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerG0xyvk0\appProdProjectContainer([
    'container.build_hash' => 'G0xyvk0',
    'container.build_id' => '701734f5',
    'container.build_time' => 1581014940,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG0xyvk0');