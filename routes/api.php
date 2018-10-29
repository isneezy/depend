<?php
/** @var \Laravel\Lumen\Routing\Router $router */
$router->group(['prefix' => 'api'], function (Laravel\Lumen\Routing\Router $router) {
	$router->get('/', function () {
		return [
			'name' => 'Depend (Private Composer Repository)',
			'version' => '0.1.0-dev'
		];
	});
});