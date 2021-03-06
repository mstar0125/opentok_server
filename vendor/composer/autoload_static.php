<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit21c261cb35168e34ae7348d0aee8ec74
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'O' => 
        array (
            'OpenTok\\' => 8,
        ),
        'J' => 
        array (
            'JsonSchema\\' => 11,
        ),
        'I' => 
        array (
            'ICanBoogie\\Storage\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'OpenTok\\' => 
        array (
            0 => __DIR__ . '/..' . '/opentok/opentok/src/OpenTok',
        ),
        'JsonSchema\\' => 
        array (
            0 => __DIR__ . '/..' . '/justinrainbow/json-schema/src/JsonSchema',
        ),
        'ICanBoogie\\Storage\\' => 
        array (
            0 => __DIR__ . '/..' . '/icanboogie/storage/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'J' => 
        array (
            'JohnStevenson\\JsonWorks' => 
            array (
                0 => __DIR__ . '/..' . '/aoberoi/json-works/src',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit21c261cb35168e34ae7348d0aee8ec74::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit21c261cb35168e34ae7348d0aee8ec74::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit21c261cb35168e34ae7348d0aee8ec74::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
