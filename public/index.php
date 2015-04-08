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
| Create an IoC Container
|--------------------------------------------------------------------------
|
| Create a new IoC container.
|
*/
$app = new \Framework\Core\Application;



// Try to create an instance of Blade and bind it for injection
// Ideally this should go in Framework\Core\Application.php
// but doesn't seem to work there either
$viewsPath = __DIR__ . '/../resources/views/';
$cachePath = __DIR__ . '/../resources/cache/';
$renderer = new \Windwalker\Renderer\BladeRenderer($viewsPath, array('cache_path' => $cachePath));
$app->bind('Windwalker\Renderer\BladeRenderer', $renderer);




/*
|--------------------------------------------------------------------------
| Load environment
|--------------------------------------------------------------------------
|
| If our project contains a .env file then we should load that here, if we
| don't have such a file then we need to make sure we skip this step.
|
*/
if (file_exists(__DIR__ . '/../.env')) {
    Dotenv::load(__DIR__ . '/../');
}

/*
|--------------------------------------------------------------------------
| Create Services
|--------------------------------------------------------------------------
|
| Build up any services in the container.
|
*/
require __DIR__ . '/../app/services.php';

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
