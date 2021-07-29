<?php

namespace Engine\Service\Router;

use Engine\Service\AbstractProvider,
    Engine\Core\Router\Router;

/**
 * Class Provider
 * @package Engine\Service\Router
 */
class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public string $serviceName = 'router';

    /**
     *
     */
    public function init()
    {
        $router = new Router('https://cms.loc/');

        $this->di->set($this->serviceName, $router);
    }
}

