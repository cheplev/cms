<?php

namespace Engine;

use Engine\Di\Di;

class Controller
{
    protected $di;

    protected $db;

    protected $view;

    public function __construct(Di $di)
    {
        $this->di = $di;

        $this->view = $this->di->get('view');
    }
}