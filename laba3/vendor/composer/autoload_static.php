<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit510f9407d1204048bd14254ad89c3b85
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit510f9407d1204048bd14254ad89c3b85::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
