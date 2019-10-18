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
});

// Route::get('/greet', function () {
//     $request = request();

//     $name = $request->query('name', 'Stranger');
//     return "Hello, {$name}!";
// });

Route::get('/greet')->uses('AppController@greet');
Route::post('/greet')->uses('AppController@greet');

Route::resource('/people', PersonController::class);

Route::get('/form', function () {
    return view('form');
});
