<?php

namespace Engine\Core\Database;

use \PDO;

class Connection
{
	private $link;

    /**
     * Connection constructor.
     */
    public function __construct ()
   	{
		$this->connect();
	}

    /**
     * @return $this
     */
    private function connect ()
	{
		$config = [
		    'host' => 'localhost',
            'db_name' => 'testPDO',
            'user_name' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ];

		$dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset:='.$config['charset']; 

		$this->link = new PDO($dsn, $config['user_name'], $config['password']);
	
		return $this;
	}

    /**
     * @param $sql
     * @return mixed
     */
    public function execute ($sql)
	{
		$sth = $this->link->prepare($sql);

		return $sth->execute();		
	}

    /**
     * @param $sql
     * @return array
     */
    public function query ($sql)
	{
		$sth = $this->link->prepare($sql);

		$sth->execute();

		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		if ($result === false) {
				return [];
		}	

		return $result;
	}
}
