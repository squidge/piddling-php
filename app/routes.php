<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/
$this->router->get('/', function() {
    return 'piddling php - pathetically trivial; trifling';
});

$this->router->get('/test', function() {
    return 'piddling php - a silly little test route :)';
});
