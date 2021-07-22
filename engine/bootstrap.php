<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Engine\Cms,
	Engine\Di\Di;

try{
	//Dependency injection
	$di = new Di();
	$di->set('test1', ['db' => ['db_object']]);
	$di->set('test2', ['mail' => ['mail_object']]);
	$cms = new Cms($di);
	$cms->run();
	
} catch (\ErrorException $e) {
	echo $e->getMessage();
}
