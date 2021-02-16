<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\AbsensController;
use App\Http\Controllers\MataKuliahsController;
use App\Http\Controllers\SemestersController;
use App\Http\Controllers\JadwalsController;
use App\Http\Controllers\KontraksController;

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
Route::get('', [HomeController::class, 'index']);
Route::resources([
    'Home' => HomeController::class,
    'mahasiswas' => CobaController::class,
    'absens' => AbsensController::class,
    'matakuliahs' => MataKuliahsController::class,
    'semesters' => SemestersController::class,
    'jadwals' => JadwalsController::class,
    'kontraks' => KontraksController::class,


]);
