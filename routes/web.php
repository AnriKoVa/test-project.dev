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
    return redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('create_article', [ 'as' => 'create_article' , 'uses' => 'ArticlesController@create', 'middleware' => ['auth']] );
Route::post('save_article', [ 'as' => 'save_article' , 'uses' => 'ArticlesController@save', 'middleware' => ['auth']] );

Route::get('update_article/{id}', [ 'as' => 'update_article' , 'uses' => 'ArticlesController@update_get', 'middleware' => ['auth']] );
Route::post('update_article/{id}', [ 'as' => 'update_article' , 'uses' => 'ArticlesController@update_post', 'middleware' => ['auth']] );
Route::get('delate_article/{id}', [ 'as' => 'delate_article' , 'uses' => 'ArticlesController@delate', 'middleware' => ['auth']] );

