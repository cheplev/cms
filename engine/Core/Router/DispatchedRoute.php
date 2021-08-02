<?php


namespace Engine\Core\Router;


/**
 * Class DispatchedRoute
 * @package Engine\Core\Router
 */
class DispatchedRoute
{
    /**
     * @var
     */
    private $controller;
    /**
     * @var array|mixed
     */
    private $parameters;

    /**
     * DispatchedRoute constructor.
     * @param $controller
     * @param array $parameters
     */
    public function __construct($controller, array $parameters = [])
    {
        $this->controller = $controller;
        $this->parameters = $parameters;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return array|mixed
     */
    public function getParameters(): mixed
    {
        return $this->parameters;
    }
}