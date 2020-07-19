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
Route::get('/', 'ReceipeController@index');
// Route::get('/', 'HomeController@index');

// // Route::get('/', function () {
// //     return view('home', [
// //     	'name' => "Home Page Template"
// //     ]);
// //     // return view('home') => with('name', "Home Page Template");
// // });

// Route::get('/php', 'HomeController@phpPage');
// // Route::get('/php', function () {
// //     return view('php', 
// //     	[
// //     	"data" => array(
// //     		'lesson1'=>'this is php lesson1',
// //     		'lesson2'=> 'this is php lesson2',
// //     		'lesson3'=> 'this is php lesson3',
// //     )
// // ]) ;
// // });
// Route::get('/js', 'HomeController@jsPage');
// Route::get('/js', function () {
//     return view('js', 
//     	[
//     	"data" => array(
//     		'lesson1'=>'this is JS lesson1',
//     		'lesson2'=> 'this is JS lesson2',
//     		'lesson3'=> 'this is JS lesson3',
//     )
// ]);
// });
