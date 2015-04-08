<?php namespace App\Controllers;

use Windwalker\Renderer\BladeRenderer as Blade;

class HomeController
{
    public function index(Blade $blade)
    {
        var_dump($blade);
        return $blade->render('hello');
    }
}
