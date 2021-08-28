<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::get('/selects', 'SelectsController@index')->name('selects_index');
        Route::post('/selects/create', 'SelectsController@store')->name('store');


        Route::get('/get_level2categories', 'SelectsController@get_level2categories')->name('get_level2categories');
        Route::get('/get_level3categories', 'SelectsController@get_level3categories')->name('get_level3categories');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
