<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;

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
    return view('dashboard');
});

Route::get('/fakultas',[FakultasController::class , 'index'])->name('fakultas');
Route::get('/jurusan',[JurusanController::class , 'index'])->name('jurusan');
Route::get('/mahasiswa',[MahasiswaController::class , 'index'])->name('mahasiswa');

//fakultas
Route::get('/createfakultas',[FakultasController::class, 'createfakultas'])->name('createfakultas');
Route::post('/insertdatafakultas',[FakultasController::class, 'insertdatafakultas'])->name('insertdatafakultas');
Route::get('/tampildatafakultas/{id}',[FakultasController::class, 'tampildatafakultas'])->name('tampildatafakultas');
Route::post('/updatedatafakultas/{id}',[FakultasController::class, 'updatedatafakultas'])->name('updatedatafakultas');
Route::get('/deletedatafakultas{id}',[FakultasController::class,'deletedatafakultas'])->name('deletedatafakultas');

//jurusan
Route::get('/createjurusan',[JurusanController::class, 'createjurusan'])->name('createjurusan');
Route::post('/insertdatajurusan',[JurusanController::class, 'insertdatajurusan'])->name('insertdatajurusan');
Route::get('/tampildatajurusan/{id}',[JurusanController::class, 'tampildatajurusan'])->name('tampildatajurusan');
Route::post('/updatedatajurusan/{id}',[JurusanController::class, 'updatedatajurusan'])->name('updatedatajurusan');
Route::get('/deletedatajurusan{id}',[JurusanController::class,'deletedatajurusan'])->name('deletedatajurusan');

//mahasiswa
Route::get('/createmahasiswa',[MahasiswaController::class, 'createmahasiswa'])->name('createmahasiswa');
Route::post('/insertdatamahasiswa',[MahasiswaController::class, 'insertdatamahasiswa'])->name('insertdatamahasiswa');
Route::get('/tampildatamahasiswa/{id}',[MahasiswaController::class, 'tampildatamahasiswa'])->name('tampildatamahasiswa');
Route::get('/detailmahasiswa/{id}',[MahasiswaController::class, 'detailmahasiswa'])->name('detailmahasiswa');
Route::post('/updatedatamahasiswa/{id}',[MahasiswaController::class, 'updatedatamahasiswa'])->name('updatedatamahasiswa');
Route::get('/deletedatamahasiswa{id}',[MahasiswaController::class,'deletedatamahasiswa'])->name('deletedatamahasiswa');
