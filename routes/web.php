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
    return view('partials.home');
});

Route::get('/about', function () {
    return view('partials.about');
});

Route::get('/destinasi', function () {
    return view('partials.destinasi-wisata');
});

Route::get('/destinasi/detail', function () {
    return view('partials.detail-artikel');
});

Route::get('/panduan', function () {
    return view('partials.panduan');
});

Route::get('/home', function () {
    return view('layouts.main2');
});

