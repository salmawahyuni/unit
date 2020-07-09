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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/mobil', function () {
    return view('mobil');
});

Route::get('/ruangan', function () {
    return view('ruangan');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

Route::get('/info', function () {
    return view('info');
});

Route::get('/validator', function () {
    return view('validator');
});

Route::get('/permintaan', function () {
    return view('permintaan');
});

Route::get('/jadwal', function () {
    return view('jadwal');
});