<?php namespace Framework\Core;

use Exception;
use Klein\Klein;
use Pimple\Container;

class Application extends Container
{
    /**
     * @var Klein
     */
    protected $router;

    /**
     * @param Klein $router
     */
    public function __construct(Klein $router)
    {
        $this->router = $router;
    }

    /**
     * Start Application
     *
     * @return bool
     */
    public function startApplication()
    {
        require __DIR__ . '/../../../app/routes.php';

        $this->router->dispatch();
        return true;
    }

    /**
     * Catch global exceptions
     *
     * @param Exception $e
     * @return bool
     */
    public function catchGlobalExceptions(Exception $e)
    {
        return true;
    }
}
