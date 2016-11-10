<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite68be9c4220cb7b0ffacba6f48cc000b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite68be9c4220cb7b0ffacba6f48cc000b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite68be9c4220cb7b0ffacba6f48cc000b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}