<?php
namespace Engine\Di;


class Di 
{
	/**
	 * @var array
	 */
	private $container = [];

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function set ($key, $value) {
		$this->container[$key] = $value;
		return $this;
	}
	/**
	 * @param $key
	 * return mixed
	 */
	public function get ($key) {
			return $this->container[$key];
	}
	/**
	 * @params $key
	 * return mixed
	 */
	public function has($key)
	{
		return isset($this->container[$key]) ? $this->container[$key] : null;
	}
}

