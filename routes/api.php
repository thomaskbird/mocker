<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, User-Agent, authorization");

date_default_timezone_set('America/Detroit');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', ['as' => 'get_users', 'uses' => 'UserController@get_users']);
Route::get('/users/{id}', ['as' => 'get_user', 'uses' => 'UserController@get_user']);

Route::get('/posts', ['as' => 'get_posts', 'uses' => 'PostController@get_posts']);
Route::get('/posts/{id}', ['as' => 'get_post', 'uses' => 'PostController@get_post']);