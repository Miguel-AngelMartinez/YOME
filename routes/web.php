<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vistaController;

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
Route::get('/',[vistaController::class,'videos'])->name('video');
Route::get('/vista', [vistaController::class, 'index'])->name('index');
Route::get('/nueva vista', [vistaController::class, 'vista'])->name('vista');

