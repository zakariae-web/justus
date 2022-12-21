<?php
use App\Http\Controllers\staticcontroller;
use App\Http\Controllers\Inputscontroller;
use App\Http\Controllers\inpt;
use App\Http\Controllers\courses;
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

Route::get('/', [staticcontroller::class, 'index']);
Route::get('chose', [staticcontroller::class, 'chose']);
Route::resource('cv', Inputscontroller::class);
Route::resource('s3', inpt::class);
Route::resource('course', courses::class);
Auth::routes();
Route::get('/chose', [App\Http\Controllers\HomeController::class, 'chose'])->name('chose');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('cv.admin');
Route::get('/admin2', [App\Http\Controllers\HomeController::class, 'admin2'])->name('s3.admin2');
Route::get('/cv/create', [App\Http\Controllers\HomeController::class, 'create'])->name('cv.create');
Route::get('/s3/create', [App\Http\Controllers\HomeController::class, 'create2'])->name('s3.create');

