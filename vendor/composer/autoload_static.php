<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedb8a99c378c78efd7d1dab43e0de5ad
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitedb8a99c378c78efd7d1dab43e0de5ad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitedb8a99c378c78efd7d1dab43e0de5ad::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
