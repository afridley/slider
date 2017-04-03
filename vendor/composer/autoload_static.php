<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit057edf6088f6b92d7810603cf69773f4
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enupal\\slider\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enupal\\slider\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit057edf6088f6b92d7810603cf69773f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit057edf6088f6b92d7810603cf69773f4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
