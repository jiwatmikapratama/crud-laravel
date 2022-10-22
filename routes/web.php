<?php

use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
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
//     return view('mahasiswa');
// });

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/create', [MahasiswaController::class, 'create']);
Route::post('/store', [MahasiswaController::class, 'store']);
Route::get('/edit/{id}', [MahasiswaController::class, 'edit']);
Route::post('/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/delete/{id}', [MahasiswaController::class, 'destroy']);
// Route::get('{id}/update', [MahasiswaController::class, 'update']);
