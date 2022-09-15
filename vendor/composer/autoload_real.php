<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit958049789c83d9ac11b9b1ad9d94dffc
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit958049789c83d9ac11b9b1ad9d94dffc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit958049789c83d9ac11b9b1ad9d94dffc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit958049789c83d9ac11b9b1ad9d94dffc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
