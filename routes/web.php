<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/about', [DashboardController::class, 'about'])
        ->name('about');

    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories.index');

    Route::get('/categories/create', [CategoryController::class, 'create'])
        ->name('categories.create');

    Route::get('/products', [ProductController::class, 'index'])
        ->name('products.index');

    Route::get('/products/create', [ProductController::class, 'create'])
        ->name('products.create');

    Route::get('/flash-demo', function () {
        return redirect()
            ->route('admin.dashboard')
            ->with('success','Layout OK — sẵn sàng Migration');
    })->name('flash');
});