<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1b94720a496e9585c4c2ad5aa40ac63
{
    public static $classMap = array (
        'laurinium\\indexus\\Crawler' => __DIR__ . '/../..' . '/lib/Crawler.php',
        'laurinium\\indexus\\Indexer' => __DIR__ . '/../..' . '/lib/Indexer.php',
        'laurinium\\indexus\\Utils' => __DIR__ . '/../..' . '/lib/Utils.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita1b94720a496e9585c4c2ad5aa40ac63::$classMap;

        }, null, ClassLoader::class);
    }
}
