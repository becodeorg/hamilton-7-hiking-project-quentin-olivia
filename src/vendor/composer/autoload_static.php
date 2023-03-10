<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit780f342a425d0a815c15ed65497717de
{
    public static $classMap = array (
        'AuthController' => __DIR__ . '/../..' . '/app/controllers/AuthController.php',
        'AuthModel' => __DIR__ . '/../..' . '/app/models/authModel.php',
        'ComposerAutoloaderInit780f342a425d0a815c15ed65497717de' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit780f342a425d0a815c15ed65497717de' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Database' => __DIR__ . '/../..' . '/app/models/database.php',
        'Hike' => __DIR__ . '/../..' . '/app/models/hikeModel.php',
        'HikeController' => __DIR__ . '/../..' . '/app/controllers/HikeController.php',
        'HomeController' => __DIR__ . '/../..' . '/app/controllers/HomeController.php',
        'UserController' => __DIR__ . '/../..' . '/app/controllers/UserController.php',
        'UserModel' => __DIR__ . '/../..' . '/app/models/userModel.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit780f342a425d0a815c15ed65497717de::$classMap;

        }, null, ClassLoader::class);
    }
}
