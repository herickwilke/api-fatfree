<?php

include __DIR__.'/vendor/autoload.php';

$f3 = Base::instance();
$f3->set('DEBUG', 3);

$f3->route('POST /users', function( $f3, $params) {

});

$f3->route('GET /', function($f3 ){
	echo 'Nada aqui.';

});

$f3->run();