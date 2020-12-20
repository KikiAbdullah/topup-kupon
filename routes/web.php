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

Route::get('/', 'C_Kupon@index');
Route::get('/tambah', 'C_Kupon@add');
Route::post('/kupon/store', 'C_Kupon@store');
Route::get('/tukar/{id}', 'C_Kupon@tukar_view');
Route::post('/tukar/proses', 'C_Kupon@tukar_kupon');
