<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit194767e6f85c00fa345d48fddd537d2c
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit194767e6f85c00fa345d48fddd537d2c::$classMap;

        }, null, ClassLoader::class);
    }
}