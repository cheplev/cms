<?php

namespace Engine;

/**
 * Class Cms
 * @package Engine
 */
class Cms
{
	/**
	 * @var $di
	 */
	private $di;

    /**
     * @var
     */
    public $router;

	/**
	 * @param $di
	 */
	public function __construct($di)
	{
		$this->di = $di;
		$this->router = $this->di->get('router');
	}

    /**
     * Run Cms
     */
    public function run() {
		$this->router->add('home', '/', 'HomeController:index');
		$this->router->add('project', '/', 'HomeController:index', 'POST');
		print_r($this->di);
	}
}

