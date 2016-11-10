<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33c8ab3cd160d63c2bdb41766064d9fd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\Config\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/config',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33c8ab3cd160d63c2bdb41766064d9fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33c8ab3cd160d63c2bdb41766064d9fd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}