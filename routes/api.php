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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
/*Coffeehouses API part*/
Route::get('coffeehouses', 'CoffeehouseController@getAll');
Route::get('coffeehouses/{id}', 'CoffeehouseController@getOne');

/*Products API part*/
Route::get('products', 'ProductController@getAll');
Route::get('products/{id}', 'ProductController@getOne');
/* Toppings API part */
Route::get('toppings/{id}', 'ProductController@getToppings');
/* App Users API part */
Route::get('appusers/{id}', 'AppusersController@getOne');
Route::get('appusers', 'AppusersController@getAll');
/*POST API*/
Route::post('/register', 'AppusersController@register');
