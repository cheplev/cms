<?php

namespace Engine;

class Cms
{
	/**
	 * @var $di
	 */
	private $di;


	/**
	 * @param $di
	 */
	public function __construct($di)
	{
		$this->di = $di;
	}

    public function run() {
		print_r($this->di);
	}
}

