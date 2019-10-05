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
// Rota do Site
Route::get('/', function () {
    return view('site.index');
})->name('site');

// Grupo de Rotas do Admin
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
    
    Route::get('/home', 'HomeController@index')->name('home');

});

// Rotas da autentificação
Auth::routes();


