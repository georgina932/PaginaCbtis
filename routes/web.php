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
})->name('historia');
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
Route::get('/reglamento', function () {
    return view('reglamento');
});
Route::get('/transparencia', function () {
    return view('transparencia');
});
Route::get('/becas', function () {
    return view('becas');
});
Route::get('/clubdeportivo', function () {
    return view('clubdeportivo');
});

