<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSuj6cxx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSuj6cxx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerSuj6cxx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerSuj6cxx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerSuj6cxx\appDevDebugProjectContainer([
    'container.build_hash' => 'Suj6cxx',
    'container.build_id' => '53a33dcc',
    'container.build_time' => 1581170203,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSuj6cxx');
