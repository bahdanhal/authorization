<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66045a029c31b289a05e0cde10fbadc5
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DB\\' => 3,
        ),
        'A' => 
        array (
            'Authorization\\' => 14,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DB\\' => 
        array (
            0 => __DIR__ . '/../..' . '/DB',
        ),
        'Authorization\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Authorization',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit66045a029c31b289a05e0cde10fbadc5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66045a029c31b289a05e0cde10fbadc5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit66045a029c31b289a05e0cde10fbadc5::$classMap;

        }, null, ClassLoader::class);
    }
}
