<?php


namespace Engine;

use Engine\Di\Di;

class Controller
{
    protected $di;

    protected $db;

    public function __construct(Di $di)
    {
        $this->di = $di;
    }
}