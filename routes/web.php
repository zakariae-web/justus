<?php
use App\Http\Controllers\staticcontroller;
use App\Http\Controllers\Inputscontroller;
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
Route::resource('cv', Inputscontroller::class);
