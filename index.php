<?php

include __DIR__.'/vendor/autoload.php';

$f3 = Base::instance();
$f3->set('DEBUG', 3);
$f3->set('AUTOLOAD', 'domain/');
$f3->set('DB', new DB\SQL ('mysql:host=localhost;port=3306;dbname=api2', 'root', ''));

$f3->route('GET /users', 'Users->list');
$f3->route('POST /users', 'Users->create');

$f3->route('GET /', function($f3 ){
	echo 'Nada aqui.';

});

$f3->run();