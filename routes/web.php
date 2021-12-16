<?php

use App\Http\Controllers\AbsenController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajarController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);

Route::group(['middleware' => 'admin'], function(){
    Route::get('/console', [ConsoleController::class, 'index'])->name('admin');
    Route::post('/console/edit/{idUser}', [ConsoleController::class, 'editUser']);
    Route::get('/console/delete/{idUser}', [ConsoleController::class, 'deleteUser']);
});
Route::group(['middleware' => 'pengajar'], function(){
    Route::get('/console', [ConsoleController::class, 'index'])->name('pengajar');
    Route::post('/console/class/', [PengajarController::class, 'insertClass']);
    Route::post('/console/edit-class/{idClass}', [PengajarController::class, 'editClass']);
    Route::get('/console/delete-class/{idClass}', [PengajarController::class, 'deleteClass']);
});
Route::group(['middleware' => 'pelajar'], function(){
    Route::get('/console', [ConsoleController::class, 'index'])->name('pelajar');
    Route::get('/class', [ClassController::class, 'index'])->name('class');
    Route::get('/sd', [AbsenController::class, 'sd']);
    Route::get('/smp', [AbsenController::class, 'smp']);
    Route::get('/sma', [AbsenController::class, 'sma']);
    Route::get('/univ', [AbsenController::class, 'univ']);
    Route::post('/univ', [AbsenController::class, 'absenUniv']);
    Route::get('/absen', [AbsenController::class, 'absen']);
    Route::post('/absen', [AbsenController::class, 'absenNow']);
});

Auth::routes();

Route::get('/console', [App\Http\Controllers\ConsoleController::class, 'index'])->name('console');
