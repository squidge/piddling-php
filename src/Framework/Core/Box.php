<?php namespace Framework\Core;

use Exception;
use League\Container\Container;

class Box
{
    /**
     * @var Container
     */
    public static $app;

    public function __construct(Container $app)
    {
        static::$app = $app;
    }

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
