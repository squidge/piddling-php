<?php namespace Framework\Core;

use Exception;
use Pimple\Container;

class Application extends Container
{
    public function startApplication()
    {
        echo "piddling php - pathetically trivial; trifling";

        return true;
    }

    public function catchGlobalExceptions(Exception $e)
    {
        return true;
    }
}
