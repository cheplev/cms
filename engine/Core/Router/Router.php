<?php


namespace Engine\Core\Router;


/**
 * Class Router
 * @package Engine\Core\Router
 */
class Router
{
    /**
     * @var array
     */
    private $routes = [];
    /**
     * @var
     */
    private $host;

    /**
     * Router constructor.
     * @param $host
     */
    public function __construct($host)
    {
        $this->host = $host;
    }

    /**
     * @param $key
     * @param $pattern
     * @param $controller
     * @param string $method
     */
    public function add($key, $pattern, $controller, string $method = 'GET' )
    {
         $this->routes[$key] = [
            'pattern'    => $pattern,
            'controller' => $controller,
            'method'     => $method,
        ];
    }
}