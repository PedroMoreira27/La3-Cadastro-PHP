<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94e54fb0a79dc9d3464929bba5cc8919
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94e54fb0a79dc9d3464929bba5cc8919::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94e54fb0a79dc9d3464929bba5cc8919::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit94e54fb0a79dc9d3464929bba5cc8919::$classMap;

        }, null, ClassLoader::class);
    }
}