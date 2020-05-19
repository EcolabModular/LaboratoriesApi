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

$router->get('/laboratories', 'LaboratoryController@index');
$router->post('/laboratories', 'LaboratoryController@store');
$router->get('/laboratories/{laboratory}', 'LaboratoryController@show');
$router->put('/laboratories/{laboratory}', 'LaboratoryController@update');
$router->patch('/laboratories/{laboratory}', 'LaboratoryController@update');
$router->delete('/laboratories/{laboratory}', 'LaboratoryController@destroy');