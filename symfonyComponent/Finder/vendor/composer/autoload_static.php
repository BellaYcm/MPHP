<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit137e24c3bdb1724b73c4a8eff1fb3dfd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit137e24c3bdb1724b73c4a8eff1fb3dfd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit137e24c3bdb1724b73c4a8eff1fb3dfd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}