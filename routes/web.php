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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/mahasiswa', 'App\Http\Controllers\MahasiswaController@index');

Route::get('/register', 'App\Http\Controllers\MahasiswaController@tambah');

Route::post('/mahasiswa', 'App\Http\Controllers\MahasiswaController@store');

Route::get('/mahasiswa/{id}/edit', 'App\Http\Controllers\MahasiswaController@edit');
Route::post('/mahasiswa/{id}/update', 'App\Http\Controllers\MahasiswaController@update');
Route::get('/mahasiswa/{id}/delete', 'App\Http\Controllers\MahasiswaController@delete');
