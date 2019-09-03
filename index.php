<?php

include __DIR__.'/vendor/autoload.php';

$f3 = Base::instance();
$f3->set('DEBUG', 3);
$f3->set('DB', new DB\SQL ('mysql:host=localhost;port=3306;dbname=api2', 'root', ''));

$f3->route('GET /users', function( $f3, $params) {
	$user=new DB\SQL\Mapper($f3->get('DB'),'user');
	$user->name = "Hérick";
	$user->email = "herickcwilke@gmail.com";
	$user->password = "11213212131";
	$user->save();
});

$f3->route('GET /', function($f3 ){
	echo 'Nada aqui.';

});

$f3->run();