<?php namespace Framework\Core;

use Exception;
use Illuminate\Container\Container;
use Illuminate\Http\Request;

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

        $request = Request::createFromGlobals();
        $response = $this->router->dispatch($request);
        $response->send();

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
