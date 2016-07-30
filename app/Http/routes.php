<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Client;

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes', 'ClientController@getRegistrar');
Route::get('proveedores', 'ProviderController@getRegistrar');
Route::get('almacenes', 'AlmacenController@getRegistrar');
Route::get('materiales', 'MaterialController@getRegistrar');



