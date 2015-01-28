<?php namespace Framework;

use Exception;

class Box
{
    public function startApplication()
    {
        return true;
    }

    public function catchGlobalExceptions(Exception $e)
    {
        return true;
    }
}
