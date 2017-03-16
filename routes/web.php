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
    return view('top');
});

Route::get('/higher-order-collection-messages', function () {
    return view('higher-order-collection-messages');
});

Route::get('/laravel-mix', function () {
    return view('laravel-mix');
});

Route::get('/fluent-routing', function () {
    return view('fluent-routing');
});
