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
	$router->get('/', function (\App\Support\Contracts\AppInfoInterface $info) {
		return [
			'name' => $info->name(),
			'tag_name' => $info->tagName(),
			'version' => $info->version()
		];
	});
});

$router->get('/', function () { return redirect('/app'); });
$router->get('/app{any:.*}', ['as' => 'home', 'uses' => 'SpaController@index']);
