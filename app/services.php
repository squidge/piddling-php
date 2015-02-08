<?php

use Klein\Klein;

/*
|--------------------------------------------------------------------------
| Add a router to the container
|--------------------------------------------------------------------------
|
| Create an instance of the router in the container.
|
*/
$app['router'] = function($container) {
    return new Klein;
};

/*
|--------------------------------------------------------------------------
| Store configuration arrays into the container
|--------------------------------------------------------------------------
*/
$app['config'] = [
    'database'  => require __DIR__  . '/../app/config/database.php',
    'mail'      => require __DIR__  . '/../app/config/mail.php'
];