<?php

/*
|--------------------------------------------------------------------------
| Composer Auto Loader
|--------------------------------------------------------------------------
|
| Standard Composer Auto Loader
|
*/
require __DIR__ . '/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Inversion of Control (IoC) Container
|--------------------------------------------------------------------------
|
| Create an IoC container ready to be injected into the sandbox.
|
*/
$container = new \League\Container\Container;

/*
|--------------------------------------------------------------------------
| Create a Box
|--------------------------------------------------------------------------
|
| Everything in Piddle run within a sandbox environment, let's create one
| of those right away.
|
*/
$box = new \Framework\Core\Box($container);

/*
|--------------------------------------------------------------------------
| Fire It Up! (and check for any f-bombs)
|--------------------------------------------------------------------------
|
| Let's get this party started!
|
*/
try {
    $box->startApplication();
} catch (Exception $exception) {
    $box->catchGlobalExceptions($exception);
}
