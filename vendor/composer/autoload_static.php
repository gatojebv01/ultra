<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit562a5ba256676441cc72d2efc65196dc
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\Console\\' => 26,
            'Seld\\PharUtils\\' => 15,
            'Seld\\JsonLint\\' => 14,
            'Seld\\CliPrompt\\' => 15,
        ),
        'J' => 
        array (
            'JsonSchema\\' => 11,
        ),
        'C' => 
        array (
            'Composer\\Spdx\\' => 14,
            'Composer\\Semver\\' => 16,
            'Composer\\CaBundle\\' => 18,
            'Composer\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Seld\\PharUtils\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/phar-utils/src',
        ),
        'Seld\\JsonLint\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/jsonlint/src/Seld/JsonLint',
        ),
        'Seld\\CliPrompt\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/cli-prompt/src',
        ),
        'JsonSchema\\' => 
        array (
            0 => __DIR__ . '/..' . '/justinrainbow/json-schema/src/JsonSchema',
        ),
        'Composer\\Spdx\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/spdx-licenses/src',
        ),
        'Composer\\Semver\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/semver/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/composer/src/Composer',
        ),
    );

    public static $prefixesPsr0 = array (
        'u' => 
        array (
            'ultra\\Composer\\' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit562a5ba256676441cc72d2efc65196dc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit562a5ba256676441cc72d2efc65196dc::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit562a5ba256676441cc72d2efc65196dc::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
