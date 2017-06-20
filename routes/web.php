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
Route::get('/', array('as' => 'contents.index', 'uses' => 'ContentsController@index'));
Route::get('auth/login', array('uses' => 'UsersController@login'));
Route::post('auth/login', array('uses' => 'UsersController@authenticate'));
Route::get('auth/logout', array('uses' => 'UsersController@logout'));
Route::post('/register', array('uses' => 'UsersController@register'));
Route::get('/checkout', array('middleware' => 'auth','uses' => 'UsersController@checkout'));

Route::group(array('before' => 'auth'), function() {
  Route::get('dashboard', array('as' => 'contents.dashboard', 'uses' => 'ContentsController@dashboard'));
  Route::get('contents/add', array('as' => 'contents.create', 'uses' => 'ContentsController@create'));
  Route::post('contents/store', array('as' => 'contents.store', 'uses' => 'ContentsController@store'));
  Route::get('contents/edit/{id}', array('as' => 'contents.edit', 'uses' => 'ContentsController@edit'));
  Route::patch('contents/update/{id}', array('as' => 'contents.update', 'uses' => 'ContentsController@update'));
  Route::delete('contents/delete/{id}', array('as' => 'contents.destroy', 'uses' => 'ContentsController@destroy'));
});

