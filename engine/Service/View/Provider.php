<?php

namespace Engine\Service\View;

use Engine\Service\AbstractProvider,
    Engine\Core\Template\View;

/**
 * Class Provider
 * @package Engine\Service\Router
 */
class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public string $serviceName = 'view';
       
    /**
     * init
     *
     * @return void
     */
    public function init()
    {
        $view = new View();

        $this->di->set($this->serviceName, $view);
    }
}

