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
    return view('tree');
});

Route::get('view', 'RolesController@view')->name('view');
Route::get('show/{id}', 'RolesController@show')->name('show');


Route::middleware(['auth'])->group(function(){
            Route::get('index', 'RolesController@index')->name('index');
            Route::post('store', 'RolesController@store')->name('store');
            Route::get('create', 'RolesController@create')->name('create');
            Route::get('{id}/edit', 'RolesController@edit')->name('edit');
            Route::post('update/{id}', 'RolesController@update')->name('update');
            Route::get('destroy/{id}', 'RolesController@destroy')->name('destroy');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
