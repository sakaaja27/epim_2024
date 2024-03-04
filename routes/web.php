<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpoController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SponsorsController;

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

Route::resource('/', IndexController::class, ['names' => 'index']);
Route::view('/pengumuman-kategori-web', 'layouts.layoutPengumumanWeb');
Route::view('/pengumuman-kategori-design', 'layouts.layoutPengumumanDesign');
Route::resource('/data-expo', ExpoController::class);
Route::view('/pengumuman-juara', 'layouts.layoutPengumumanJuara');
Route::controller(LoginController::class)->group(function () {
    Route::get('/Login','index')->name('Login.page');
   
});
Route::get('/Dashboard',[DashboardController::class,'index']);   
