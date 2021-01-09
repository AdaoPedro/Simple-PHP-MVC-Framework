<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit071c601ec06bd7c7007007d5f4196d1e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/Core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit071c601ec06bd7c7007007d5f4196d1e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit071c601ec06bd7c7007007d5f4196d1e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit071c601ec06bd7c7007007d5f4196d1e::$classMap;

        }, null, ClassLoader::class);
    }
}
