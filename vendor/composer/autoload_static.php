<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7735606c711204e4e64bbc900108bb0c
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\Translation\\' => 30,
        ),
        'B' => 
        array (
            'Bissolli\\TwitterScraper\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Bissolli\\TwitterScraper\\' => 
        array (
            0 => __DIR__ . '/..' . '/bissolli/twitter-php-scraper/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/nesbot/carbon/src',
    );

    public static $prefixesPsr0 = array (
        's' => 
        array (
            'stringEncode' => 
            array (
                0 => __DIR__ . '/..' . '/paquettg/string-encode/src',
            ),
        ),
        'P' => 
        array (
            'PHPHtmlParser' => 
            array (
                0 => __DIR__ . '/..' . '/paquettg/php-html-parser/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7735606c711204e4e64bbc900108bb0c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7735606c711204e4e64bbc900108bb0c::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInit7735606c711204e4e64bbc900108bb0c::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit7735606c711204e4e64bbc900108bb0c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
