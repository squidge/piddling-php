<?php namespace Framework\Core;

use Exception;
use Illuminate\Container\Container;

class Application extends Container
{
    use ApplicationHelper;

    protected $router;

    /**
     * Start Application
     *
     * @return bool
     */
    public function startApplication()
    {
        $this->router = $this['router'];

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
