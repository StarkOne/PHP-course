<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdabd90b1008e88cbbf8f02bff94fd62d
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'P' => 
        array (
            'PHPmaster\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'PHPmaster\\' => 
        array (
            0 => __DIR__ . '/..' . '/PHPmaster/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdabd90b1008e88cbbf8f02bff94fd62d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdabd90b1008e88cbbf8f02bff94fd62d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
