<?php namespace Framework\Core;

use Exception;

class Box
{
    public function startApplication()
    {
        echo "Vroom! ...";

        // call each aspect of the framework

        // Routing

        // IOC

        // etc

        return true;
    }

    public function catchGlobalExceptions(Exception $e)
    {
        return true;
    }
}
