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
    return view('index');
});
Route::get('/historia', function () {
    return view('historia');
});
Route::get('/programacion', function () {
    return view('programacion');
});
Route::get('/sym', function () {
    return view('sym');
});
Route::get('/RH', function () {
    return view('RH');
});
Route::get('/instalaciones', function () {
    return view('instalaciones');
});
Route::get('/mensaje', function () {
    return view('mensaje');
});
Route::get('/mvv', function () {
    return view('mvv');
});
