<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MhsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiController;

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

// parsing data
Route::get('mhs/', [MhsController::class, 'index']);
Route::get('mhs/{nama}', [MhsController::class, 'index']);

// request data dari url & form
Route::get('data/formulir', [MhsController::class, 'formulir']);
Route::post('data/formulir/proses', [MhsController::class, 'proses']);

// template engine
Route::get('blog', [BlogController::class, 'home']);
Route::get('blog/tentang', [BlogController::class, 'tentang']);
Route::get('blog/kontak', [BlogController::class, 'kontak']);

// CRUD ROUTE
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);

