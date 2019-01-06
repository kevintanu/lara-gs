<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

$router->get('users', ['uses' => 'UserController@index']);
$router->get('users/{id}', ['uses' => 'UserController@show']);
$router->post('users', ['uses' => 'UserController@store']);
$router->put('users/{id}', ['uses' => 'UserController@update']);
$router->delete('users/{id}', ['uses' => 'UserController@destroy']);