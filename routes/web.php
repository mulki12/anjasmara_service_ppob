<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::resource('vendors', VendorController::class)->names('vendors');

    Route::resource('categories', CategoryController::class)->names('categories');

    Route::post('sub-categories', [SubCategoryController::class, 'store'])->name('subcategory.store');
    Route::get('sub-categories/{category?}', [SubCategoryController::class, 'create'])->name('subcategory.create');

    Route::resource('products', ProductController::class)->names('products');
    Route::resource('histories', HistoryController::class)->names('histories');
});

require __DIR__.'/auth.php';
