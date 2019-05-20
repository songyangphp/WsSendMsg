<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29f139dc94331cc28920736b9a6f760e
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'msg\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'msg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29f139dc94331cc28920736b9a6f760e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29f139dc94331cc28920736b9a6f760e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}