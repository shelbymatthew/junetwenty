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
Route::get('/', 'HomeController@index');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('about', function () {

    $name = ' Shelby';
    $lastname = ' Smith';
    $email = ' Shelby@email.com';
  
    // We can pass as many arguments as we want to compact.
    return view('about', compact('name', 'lastname', 'email'));
  });
  