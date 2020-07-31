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
// Route::get('receipe', 'ReceipeController@index');
// Route::get('receipe/create', 'ReceipeController@createReceipeForm');
// Route::get('receipe/{id}', 'ReceipeController@showDetail');
// Route::post('receipe', 'ReceipeController@create');
// Route::get('receipe/{id}/edit', 'ReceipeController@editReceipeForm');
// Route::patch('receipe/{id}/edit', 'ReceipeController@update');
// Route::delete()('receipe/{id}/delete', 'ReceipeController@delete');
Route::resource('receipe','ReceipeController');