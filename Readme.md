# Router - класс для маршрутизации

Класс позволяет удобно задавать url маршруты и контроллеры для их обработки

## Настройка:

Для начала работы с классом его нужно скачать и перенести в проект.
В самом проекте необходимо подключиться к классу, затем обратится к методу route();

##### Пример использоваиня:

```php
    include '../Router/Router.php';
    Router::route();
```

## Routes

### $routes

Массив в который нужно передать url адрес и файл соотвествующего обработчика

##### Пример использоваиня:
```php
    public static $routes = [
       '/' => '/controllers/homepage.php',
       '/about/' => '/controllers/about.php',
       '/test/' => '/controllers/test.php',
    ];
```

### $page404

Адрес контроллера для обработки 404 ошибки

##### Пример использоваиня:
```php
    public static $page404 = '/controllers/404.php';
```