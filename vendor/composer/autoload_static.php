<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d23c053a9f8c468545ab786a442d7b8
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7d23c053a9f8c468545ab786a442d7b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7d23c053a9f8c468545ab786a442d7b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
