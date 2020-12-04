<?php

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

// JWT Routes
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('signup', 'AuthController@signup');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

// Public Routes
Route::post('/user-validation', 'UserController@userValidation');
Route::get('/posts', 'PostController@index');

// Auth Routes
Route::group(['middleware' => 'auth'], function () {

    Route::get('/user-info', 'UserController@getUserInfo');
    Route::post('/user', 'UserController@updateUser');

    Route::post('/post', 'PostController@store');
    // Route::post('/posts/{post}/like', 'PostLikeController@like');
});
