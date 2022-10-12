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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {       // (/ slash) itu adalah default url dari laravel
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "Name" => "Pradipta Ramadhan",
        "Email" => "pradiptaramadhan1997@gmail.com",
        "Images" => "laravel-icon.jpg"
    ]);
});

Route::get('/posts', function () {
    return view('posts');
});
