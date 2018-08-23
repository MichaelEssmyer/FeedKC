<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('user/{id}', 'UserController@show');

Route::get('food', 'FoodController@index');
Route::get('cart', 'CartController@index');
Route::post('food', 'FoodController@store');

Route::get('/food/create', 'FoodController@create');

Route::get('/all-food', 'FoodController@getFood');
Route::delete('/food', 'FoodController@destroy');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/transfer', 'CartController@update');