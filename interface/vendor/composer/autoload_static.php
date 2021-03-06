<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ccb69e24059eff6d9487bc10a5c6551
{
    public static $classMap = array (
        'CommandOutputDocument' => __DIR__ . '/../..' . '/src/CommandOutputDocument.php',
        'DocumentStore' => __DIR__ . '/../..' . '/src/DocumentStore.php',
        'Documentable' => __DIR__ . '/../..' . '/src/Documentable.php',
        'HtmlDocument' => __DIR__ . '/../..' . '/src/HtmlDocument.php',
        'StreamDocument' => __DIR__ . '/../..' . '/src/StreamDocument.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit8ccb69e24059eff6d9487bc10a5c6551::$classMap;

        }, null, ClassLoader::class);
    }
}
