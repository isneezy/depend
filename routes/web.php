<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
/** @var \Laravel\Lumen\Routing\Router $router */
$router->group(['prefix' => 'api'], function (Laravel\Lumen\Routing\Router $router) {
	$router->get('/', function () {
		return [
			'name' => 'Depend (Private Composer Repository)',
			'version' => '0.1.0-dev'
		];
	});
});

$router->get('/', function () { return redirect('/app'); });
$router->get('/app{any:.*}', ['as' => 'home', 'uses' => 'SpaController@index']);
