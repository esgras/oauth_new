<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23408cfaebdcf59a8c50915039157e9d
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'Hybrid' => 
            array (
                0 => __DIR__ . '/..' . '/hybridauth/hybridauth/hybridauth',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23408cfaebdcf59a8c50915039157e9d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23408cfaebdcf59a8c50915039157e9d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit23408cfaebdcf59a8c50915039157e9d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}