<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca1940143f47e9ca9c18b5da3852f55e
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vysnch\\ActivityTracking\\' => 24,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vysnch\\ActivityTracking\\' => 
        array (
            0 => __DIR__ . '/../..' . '/packages/vsynch/activity_tracking/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca1940143f47e9ca9c18b5da3852f55e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca1940143f47e9ca9c18b5da3852f55e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
