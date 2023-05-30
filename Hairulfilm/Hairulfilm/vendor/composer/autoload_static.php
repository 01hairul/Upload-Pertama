<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdb37e4fca95bd1a60cce52a907c620c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mahasiswa\\Utspbwl\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mahasiswa\\Utspbwl\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdb37e4fca95bd1a60cce52a907c620c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdb37e4fca95bd1a60cce52a907c620c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcdb37e4fca95bd1a60cce52a907c620c::$classMap;

        }, null, ClassLoader::class);
    }
}
