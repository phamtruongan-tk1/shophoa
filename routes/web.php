<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\CheckLogin;
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

Route::group(['prefix'=>'admin'], function() {
    Route::get('/', [LoginAdminController::class, 'loginAdmin'])->name('getLoginAdmin')->middleware('checkLogin');
    Route::post('/', [LoginAdminController::class, 'postLoginAdmin'])->name('postLoginAdmin');
    Route::get('/logout', [LoginAdminController::class, 'logoutAdmin'])->name('logoutAdmin')->middleware('checkLogout');
    
    Route::group([
        'prefix'=>'product',
        'as'=>'product.',
        'middleware' => 'checkLogout'
    ], function() {
        Route::get('add', [ProductController::class, 'create'])->name('create');
        Route::post('add', [ProductController::class, 'store'])->name('store');
        Route::get('list', [ProductController::class, 'index'])->name('index');
        Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('edit/{id}', [ProductController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
    });
});

Route::get('/', [HomeController::class, 'index']);