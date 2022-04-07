<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8e14069e699247e45febdddb2d71709c
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8e14069e699247e45febdddb2d71709c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8e14069e699247e45febdddb2d71709c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8e14069e699247e45febdddb2d71709c::$classMap;

        }, null, ClassLoader::class);
    }
}
