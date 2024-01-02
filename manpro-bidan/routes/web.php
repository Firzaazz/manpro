<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\datapasienController;
use App\Http\Controllers\AnamController;
use App\Http\Controllers\AnamesisController;
use App\Http\Controllers\perawatcontroller;
// |--------------------------------------------------------------------------
// | Web Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register web routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
// |

// Route::get('/welcome', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/doctors', function () {return view('Dokter');});
Route::get('/dashboard', function () {return view('Dasboard');});

Route::get('/patients', [datapasiencontroller::class, 'index'])->name('datapasien');
Route::get('/isidata', [datapasiencontroller::class, 'create'])->name('IsiPasien');
Route::post('/simpanPasien', [datapasiencontroller::class, 'store'])->name('simpanPasien');
Route::delete('/datapasien/{id}', [datapasienController::class, 'destroy'])->name('datapasien.destroy');


Route::resource('patients', datapasiencontroller::class);
Route::get('/dasboard', [HomeController::class, 'index'])->name('dasboard');

Route::get('/Isianam', [AnamesisController::class, 'index'])->name('Isianam');
Route::get('/Isianam', [AnamesisController::class, 'create'])->name('Isianam');
Route::post('/simpananam', [AnamesisController::class, 'store'])->name('simpananam');
Route::get('/Isianam', [AnamesisController::class, 'index']);

Route::get('/perawatform','perawatcontroller@index')->name('perawatform');



Route::get('/perawatform', [PerawatController::class, 'index']);
Route::post('/perawatform', [PerawatController::class, 'store'])->name('perawatform');
// Route::get('/isianam', [AnamController::class, 'create'])->name('Isianam');
// Route::get('/isianam', [AnamController::class, 'index']);
// Route::get('/Isianam', [App\Http\Controllers\AnamController::class, 'index'])->name('Isianam');
// Route::get('/isianam', [App\Http\Controllers\AnamController::class, 'index'])->name('isianam');
