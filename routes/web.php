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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('bimits/login',[BimitsController::class,'login']);
Route::get('bimits/login',[BimitsController::class,'login']);
Route::get('bimits/login-dua',[BimitsController::class,'login_dua']);
Route::get('/bimits/ketua',[BimitsController::class,'index']);
Route::get('bimits/pengurus',[BimitsController::class,'pengurus']);
Route::get('bimits/mahasiswa',[BimitsController::class,'mahasiswa']);
Route::get('bimits/pembina',[BimitsController::class,'pembina']);


// manipulasi data pengurus
Route::get('bimits/tambahPengurus',[BimitsController::class,'tambahPengurus']);
Route::post('bimits/simpan-data',[BimitsController::class,'storePengurus']);
Route::get('bimits/edit-pengurus/{nrp}',[BimitsController::class,'editPengurus']);
Route::post('bimits/update-pengurus',[BimitsController::class,'updatePengurus']);
Route::get('/bimits/hapus-pengurus/{nrp}',[BimitsController::class, 'hapusPengurus']);


// manipulasi data pembina oleh ketua
Route::get('bimits/tambah-pembina',[BimitsController::class,'tambahPembina']);
Route::post('bimits/simpan-data-pembina',[BimitsController::class,'storePembina']);
Route::get('bimits/edit-pembina/{nip}',[BimitsController::class,'editPembina']);
Route::post('bimits/update-pembina',[BimitsController::class,'updatePembina']);
Route::get('/bimits/hapus-pembina/{nip}',[BimitsController::class, 'hapusPembina']);

// manipulasi data pembina oleh pembina
Route::get('bimits/tambah-pembina-oleh-pembina',[BimitsController::class,'tambahPembinaOlehPembina']);
Route::post('bimits/simpan-data-pembina-oleh-pembina',[BimitsController::class,'storePembinaOlehPembina']);
Route::get('bimits/edit-pembina-oleh-pembina/{nip}',[BimitsController::class,'editPembinaOlehPembina']);
Route::get('/bimits/hapus-pembina-oleh-pembina/{nip}',[BimitsController::class, 'hapusPembinaOlehPembina']);

// manipulasi data mahasiswa oleh ketua
Route::get('bimits/tambah-mahasiswa-oleh-ketua',[BimitsController::class,'tambahMahasiswaOlehKetua']);
Route::post('bimits/simpan-data-mahasiswa-oleh-ketua',[BimitsController::class,'storeMahasiswaOlehKetua']);
Route::get('bimits/edit-mahasiswa-oleh-ketua/{nip}',[BimitsController::class,'editMahasiswaOlehKetua']);
Route::post('/bimits/update-mahasiswa-oleh-ketua',[BimitsController::class,'updateMahasiswaOlehKetua']);
Route::get('/bimits/hapus-mahasiswa-oleh-ketua/{nip}',[BimitsController::class, 'hapusMahasiswaOlehKetua']);

// manipulasi data mahasiswa oleh pengurus
Route::get('bimits/tambah-mahasiswa-oleh-pengurus',[BimitsController::class,'tambahMahasiswaOlehPengurus']);
Route::post('bimits/simpan-data-mahasiswa-oleh-pengurus',[BimitsController::class,'storeMahasiswaOlehPengurus']);
Route::get('bimits/edit-mahasiswa-oleh-pengurus/{nip}',[BimitsController::class,'editMahasiswaOlehPengurus']);
Route::post('bimits/update-mahasiswa-oleh-pengurus',[BimitsController::class,'updateMahasiswaOlehPengurus']);
Route::get('/bimits/hapus-mahasiswa-oleh-pengurus/{nip}',[BimitsController::class, 'hapusMahasiswaOlehPengurus']);


// manipulasi data proker oleh ketua
Route::get('bimits/tambah-proker-oleh-ketua',[BimitsController::class,'tambahProkerOlehKetua']);
Route::post('bimits/simpan-data-proker-oleh-ketua',[BimitsController::class,'storeProkerOlehKetua']);
Route::get('bimits/edit-proker-oleh-ketua/{id_proker}',[BimitsController::class,'editProkerOlehKetua']);
Route::post('bimits/update-proker-oleh-ketua',[BimitsController::class,'updateProkerOlehKetua']);
Route::get('/bimits/hapus-proker-oleh-ketua/{id}',[BimitsController::class, 'hapusProkerOlehKetua']);

// manipulasi data proker oleh pengurus
Route::get('bimits/tambah-proker-oleh-pengurus',[BimitsController::class,'tambahProkerOlehPengurus']);
Route::post('bimits/simpan-data-proker-oleh-pengurus',[BimitsController::class,'storeProkerOlehPengurus']);
Route::get('bimits/edit-proker-oleh-pengurus/{id_proker}',[BimitsController::class,'editProkerOlehPengurus']);
Route::post('bimits/update-proker-oleh-pengurus',[BimitsController::class,'updateProkerOlehPengurus']);
Route::get('/bimits/hapus-proker-oleh-pengurus/{id_proker}',[BimitsController::class, 'hapusProkerOlehPengurus']);
