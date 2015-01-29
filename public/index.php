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
| Create a Box
|--------------------------------------------------------------------------
|
| Everything in Piddle run within a sandbox environment, let's create one
| of those right away.
|
*/
$box = new \Framework\Box;

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
