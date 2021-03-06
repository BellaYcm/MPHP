<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8826823a61b6edd0b0975b41c0db5c0d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Acme',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8826823a61b6edd0b0975b41c0db5c0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8826823a61b6edd0b0975b41c0db5c0d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
