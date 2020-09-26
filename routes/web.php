<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/loginProcess', 'AuthController@loginProcess')->name('loginProcess');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/registrationProcess', 'AuthController@registrationProcess')->name('registrationProcess');
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::middleware('auth')->group(function () {

	Route::prefix('/')->group(function () {

		Route::get('/', function () {
			return view('layout.index');
		});
		
		Route::prefix('/user')->name('user.')->group(function () {		
			Route::get('/', 'UserController@index')->name('index');
			Route::get('/show/{id}', 'UserController@show')->name('show');
			Route::get('/edit/{id}', 'UserController@edit')->name('edit');
			Route::put('/edit/{id}', 'UserController@update')->name('update');
			Route::delete('/delete/{id}', 'UserController@destroy')->name('delete');
		});

		Route::prefix('/book')->name('book.')->group(function () {
			Route::get('/', 'BookController@index')->name('index');
			Route::get('/create', 'BookController@create')->name('create');
			Route::post('/store', 'BookController@store')->name('store');
			Route::get('/edit/{id}', 'BookController@edit')->name('edit');
			Route::post('/edit/{id}', 'BookController@update')->name('update');
			Route::delete('/delete/{id}', 'BookController@destroy')->name('delete');
		});

		Route::prefix('/category')->name('category.')->group(function () {
			Route::get('/', 'CategoryController@index')->name('index');
			Route::get('/create', 'CategoryController@create')->name('create');
			Route::post('/store', 'CategoryController@store')->name('store');
			Route::get('/edit/{id}', 'CategoryController@edit')->name('edit');
			Route::post('/edit/{id}', 'CategoryController@update')->name('update');
			Route::delete('/delete/{id}', 'CategoryController@destroy')->name('delete');
		});

		Route::prefix('/order')->name('order.')->group(function () {
			Route::get('/', 'OrderController@index')->name('index');
			Route::get('/create', 'OrderController@create')->name('create');
			Route::post('/store', 'OrderController@store')->name('store');
			Route::get('/edit/{id}', 'OrderController@edit')->name('edit');
			Route::put('/edit/{id}', 'OrderController@update')->name('update');
			Route::delete('/delete/{id}', 'OrderController@destroy')->name('delete');
		});

	});
});