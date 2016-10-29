<?php

namespace Fagoc\Core;

class App
{
    private static $router;

    public static function start()
    {
        self::$router = new Router();
    }

    public static function run()
    {
        require_once __APP_ROOT__ . '/routes.php';

        self::$router->run();
    }

    public static function router()
    {
        return self::$router;
    }
}
