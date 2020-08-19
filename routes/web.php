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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/todo', 'TodoController@index');
$router->get('/todo/{id}', 'TodoController@show');
$router->post('/todo/save', 'TodoController@store');
$router->post('/todo/{id}/update', 'TodoController@update');
$router->post('/todo/{id}/delete', 'TodoController@destroy');