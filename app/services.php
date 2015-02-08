<?php

/*
|--------------------------------------------------------------------------
| Add an event dispatcher to the container
|--------------------------------------------------------------------------
|
| Create an instance of the event dispatcher in the container.
|
*/
$app['dispatcher'] = function ($container) {
    return new \Illuminate\Events\Dispatcher;
};

/*
|--------------------------------------------------------------------------
| Add a router to the container
|--------------------------------------------------------------------------
|
| Create an instance of the router in the container.
|
*/
$app['router'] = function($container) {
    return new \Illuminate\Routing\Router($container['dispatcher']);
};

/*
|--------------------------------------------------------------------------
| Store configuration arrays into the container
|--------------------------------------------------------------------------
*/
$app['config'] = [
    'database'  => require __DIR__ . '/../app/config/database.php',
    'mail'      => require __DIR__ . '/../app/config/mail.php',
    'paths'     => require __DIR__ . '/../app/config/paths.php'
];