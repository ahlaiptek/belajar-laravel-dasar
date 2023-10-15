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

Route::get('/', function () {
    $context = [
        'title_page' => 'Index'
    ];
    return view('index', $context);
});

Route::get('/about', function () {
    $context = [
        'title_page' => 'About'
    ];
    return view('about', $context);
});

Route::get('/welcome', function () {
    return view('welcome');
});
