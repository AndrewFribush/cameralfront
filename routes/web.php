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
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/who', function () {
    return view('who');
})->name('who');

Route::get('/why', function () {
    return view('why');
})->name('why');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/hiramrevels', function () {
    return view('hiramrevels');
})->name('hiramrevels');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/intake', function () {
    return view('intake');
})->name('intake');
