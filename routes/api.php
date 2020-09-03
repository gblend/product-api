<?php

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

// Routes for JWT auth
Route::group([
    'prefix' => 'jwt'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('register', 'AuthController@register');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

// Routes for Sanctum auth
Route::group([
    'prefix' => 'sanctum'
], function () {
    Route::post('register', 'UserController@register');
    Route::post('login', 'UserController@login');
    Route::post('logout', 'UserController@logout');
});

// API Request Routes
Route::group([
    'namespace' => 'Api',
    'middleware' => 'auth:sanctum'  // auth:sanctum (for sanctum tokens), auth:api (for jwt tokens)
], function () {
    Route::apiResource('products', 'ProductController');
    Route::apiResource('categories', 'CategoryController');
});
