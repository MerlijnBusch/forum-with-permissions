<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'DashboardController@index')->name('app');

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth','verified']], function () {
//    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/category/create', 'CategoryController@index')->name('category.create');
    Route::post('/category', 'CategoryController@store')->name('category.store');
    Route::get('/category/{category}', 'CategoryController@show')->name('category.show');
});
