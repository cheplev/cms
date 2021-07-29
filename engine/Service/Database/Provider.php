<?php

namespace Engine\Service\Database;

use Engine\Service\AbstractProvider,
	Engine\Core\Database\Connection;

/**
 * Class Provider
 * @package Engine\Service\Database
 */
class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public string $serviceName = 'db';

	/**
	 *
	 */
	public function init()
		{
			$db = new Connection();

			$this->di->set($this->serviceName, $db);
		}
}

