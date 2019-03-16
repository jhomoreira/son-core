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

Dusterio\LumenPassport\LumenPassport::routes( app()->router);


$router->get('/', function () use ($router){
    return view('teste');
});

$router->group(['prefix' => 'api/v1', 'namespace' => 'Api\V1', 'middleware'=>['auth']], function() use ($router){

   $router->get('noticias', 'NoticiasController@index');
   $router->get('noticias/{id}', 'NoticiasController@show');
   $router->post('noticias', 'NoticiasController@store');
   $router->put('noticias/{id}', 'NoticiasController@update');
   $router->post('noticias/{id}', 'NoticiasController@update');
   $router->delete('noticias/{id}', 'NoticiasController@destroy');

   $router->get('auth/me', 'AuthController@me');
   $router->post('auth/change-password', 'AuthController@changePassword');
   $router->post('auth/edit-profile', 'AuthController@editProfile');

   $router->get('users', 'UsersController@index');
});
