<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckLogin;
use App\Http\Middleware\Role;
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
    Route::get('/dashboard', [LoginAdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/', [LoginAdminController::class, 'loginAdmin'])->name('getLoginAdmin')->middleware('checkLogin');
    Route::post('/', [LoginAdminController::class, 'postLoginAdmin'])->name('postLoginAdmin');
    Route::get('/logout', [LoginAdminController::class, 'logoutAdmin'])->name('logoutAdmin')->middleware('checkLogout');
    
    Route::group([
        'prefix'=>'product',
        'as'=>'product.',
        'middleware' => 'checkLogout'
    ], function() {
        Route::get('add', [ProductController::class, 'create'])->name('create')->middleware('can:product-store');
        Route::post('add', [ProductController::class, 'store'])->name('store')->middleware('can:product-store');
        Route::get('list', [ProductController::class, 'index'])->name('index')->middleware('can:product-index');
        Route::get('{id}/edit', [ProductController::class, 'edit'])->name('edit')->middleware('can:product-update');
        Route::put('edit/{id}', [ProductController::class, 'update'])->middleware('can:product-update')->name('update');
        Route::delete('delete/{id}', [ProductController::class, 'destroy'])->middleware('can:product-delete')->name('destroy');
    });

    Route::group([
        'prefix'=>'date',
        'as'=>'date.',
        'middleware' => 'checkLogout'
    ], function() {
        Route::get('list', [DateController::class, 'index'])->name('index');
    });

    Route::group([
        'prefix'=>'role',
        'as'=>'role.',
        'middleware' => 'can:role-managerment'
    ], function() {
        Route::post('add', [RoleController::class, 'store'])->name('store'); 
        Route::get('list', [RoleController::class, 'index'])->name('index');
        Route::get('{id}/edit', [RoleController::class, 'edit'])->name('edit');
        Route::put('edit/{id}', [RoleController::class, 'update'])->name('update');
        Route::delete('delete/{id}', [RoleController::class, 'destroy'])->name('destroy');
    });

    Route::group([
        'prefix'=>'user',
        'as'=>'user.',
    ], function() {
        Route::post('add', [UserController::class, 'store'])->middleware('can:user-store')->name('store');
        Route::get('list', [UserController::class, 'index'])->middleware('can:user-index')->name('index');
        // Route::get('{id}/edit', [RoleController::class, 'edit'])->name('edit');
        // Route::put('edit/{id}', [RoleController::class, 'update'])->name('update');
        // Route::delete('delete/{id}', [RoleController::class, 'destroy'])->name('destroy');
    });
});

Route::get('/', [HomeController::class, 'index']);