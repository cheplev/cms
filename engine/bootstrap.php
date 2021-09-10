<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Engine\Cms,
	Engine\Di\Di;

try{
	//Dependency injection
	$di = new Di();

	$services = require __DIR__ . '/Config/Service.php';

    foreach ($services as $service) {
        $provider = new $service($di);
        $provider->init();
	}
	
	$cms = new Cms($di);
	$cms->run();
	
} catch (\ErrorException $e) {
	echo $e->getMessage();
}
