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
})->name('home');

Route::get('/search', function () {
    return view('partials/search');
});

Route::get('/choose', function () {
    return view('partials/choose');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
