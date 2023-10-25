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
    return view('dashboard.index');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/warehouse', function () {
    return view('dashboard.warehouse.index');
});
Route::get('/cabang', function () {
    return view('dashboard.cabang.index');
});
Route::get('/warehouse/tambah', function () {
    return view('dashboard.warehouse.create');
});