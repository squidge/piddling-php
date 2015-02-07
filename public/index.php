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
$app = new \Framework\Core\Application;

/*
|--------------------------------------------------------------------------
| Fire It Up! (and check for any f-bombs)
|--------------------------------------------------------------------------
|
| Let's get this party started!
|
*/
try {
    $app->startApplication();
} catch (Exception $exception) {
    $app->catchGlobalExceptions($exception);
}
