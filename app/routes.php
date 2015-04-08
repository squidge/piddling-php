<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
$this->router->get('/', 'App\Controllers\HomeController@index');

$this->router->get('/test', function() {
    return 'piddling php - a silly little test route :)';
});
