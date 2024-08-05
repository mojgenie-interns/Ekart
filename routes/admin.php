<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\productController;


Route::name('admin.')->group(function () {
    Route::get('admin/login', [LoginController::class, 'login'])->name('adminlogin');
    Route::post('admin/do-login', [LoginController::class, 'doLogin'])->name('do.login');

    Route::middleware('auth:admin')->group(function () {

        Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('admin/logout', [LoginController::class, 'logout'])->name('logout');


        Route::name('products.')->prefix('admin/products')->group(function () {
            Route::get('/', [productController::class, 'list'])->name('list');
            Route::get('create', [productController::class, 'create'])->name('create');
            Route::post('save', [productController::class, 'save'])->name('save');
            Route::post('update', [productController::class, 'update'])->name('update');
            Route::get('delete/{id}', [productController::class, 'delete'])->name('delete');
            Route::get('edit/{id}', [productController::class, 'edit'])->name('edit');
        });
    });
});
// Route::get('admin/login', [LoginController::class, 'login']);
// Route::put('admin/do-login', [LoginController::class, 'doLogin'])->name('do.login');
