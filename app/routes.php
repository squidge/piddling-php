<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
$this->router->respond('GET', '/', function () {
    return 'piddling php - pathetically trivial; trifling';
});

$this->router->respond('GET', '/test', function () {
    return 'piddling php - a silly little test route :)';
});