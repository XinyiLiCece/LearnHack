<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5ca96d0d9a075e14de4fd99f78b1899
{
    public static $classMap = array (
        'Facebook\\AutoloadMap\\ComposerPlugin' => __DIR__ . '/..' . '/hhvm/hhvm-autoload/src/ComposerPlugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc5ca96d0d9a075e14de4fd99f78b1899::$classMap;

        }, null, ClassLoader::class);
    }
}
