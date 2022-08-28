<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit393a303379c6bf9ab2de4e30b390700b
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Utils\\' => 10,
            'App\\Models\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models_2',
        ),
        'App\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit393a303379c6bf9ab2de4e30b390700b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit393a303379c6bf9ab2de4e30b390700b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit393a303379c6bf9ab2de4e30b390700b::$classMap;

        }, null, ClassLoader::class);
    }
}