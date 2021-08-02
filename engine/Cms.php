<?php

namespace Engine;

use Engine\Helper\Common;

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
		$this->router->add('product', '/user/12', 'ProductController:index');

		$routerDispatch = $this->router->dispatch(Common::getMethod(), Common::getPathUrl());
		print_r($routerDispatch);
	}
}
