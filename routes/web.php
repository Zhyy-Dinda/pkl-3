<?php

use App\Http\Controllers\BerandaControlle;
use App\Http\Controllers\BeritaControlle;
use App\Http\Controllers\DashboardControlle;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', BerandaControlle::class);
Route::resource('/dashboard', DashboardControlle::class);
Route::resource('berita', BeritaControlle::class);

