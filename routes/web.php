<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginAdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [LoginAdminController::class, 'loginAdmin'])->name('getLoginAdmin');
    Route::post('/', [LoginAdminController::class, 'postLoginAdmin'])->name('postLoginAdmin');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('menu')->group(function () {
         
    });
});