<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BimitsController;

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

Route::get('bimits/ketua',[BimitsController::class,'index']);
Route::get('bimits/pengurus',[BimitsController::class,'pengurus']);
Route::get('bimits/mahasiswa',[BimitsController::class,'mahasiswa']);
Route::get('bimits/pembina',[BimitsController::class,'pembina']);