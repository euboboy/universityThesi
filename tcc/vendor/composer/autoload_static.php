<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd32cdf5172fdce53102d48758c218adc
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PlugRoute\\' => 10,
            'PlugHttp\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PlugRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/erandir/plug-route/src',
        ),
        'PlugHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/erandir/plug-http/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd32cdf5172fdce53102d48758c218adc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd32cdf5172fdce53102d48758c218adc::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}