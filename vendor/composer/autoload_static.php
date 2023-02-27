<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdf2f968b85a9349cce2d05f822a26071
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wpmet\\UtilityPackage\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wpmet\\UtilityPackage\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdf2f968b85a9349cce2d05f822a26071::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdf2f968b85a9349cce2d05f822a26071::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdf2f968b85a9349cce2d05f822a26071::$classMap;

        }, null, ClassLoader::class);
    }
}
