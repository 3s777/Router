<?php
include 'Routes.php';


class Router
{
    /**
     * Производим перенаправление согласно заданному URL и его обработчику
     */

    public static function route() {

        $routes = Routes::$routes;
        $route = $_SERVER['REQUEST_URI'];

        if(array_key_exists($route, $routes)) {
            include $routes[$route];
            exit;
        } else {
            include Routes::$page404;
        }
    }

}