<?php
class Routes
{
    /**
     * Добавляем список url адресов и фактического нахождения файлов для обработки
     */
    public static $routes = [
        "/" => '../functions/homepage.php',
        '/about/' => '../functions/about.php',
        '/test/' => '../functions/test.php',
    ];

    /**
     * Адрес страницы обрабатывающей 404 ошибку
     */
    public static $page404 = '../functions/404.php';
}