<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PublisherController;
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
Route::get('/', [BookController::class, 'home'])->name('home');
Route::get('/book/{book}', [BookController::class, 'view'])->name('book.view');
Route::get('/category/{category}', [CategoryController::class, 'view'])->name('category.view');

Route::prefix('/publisher')->name('publisher.')->group(function() {
    Route::get('/', [PublisherController::class, 'view'])->name('view');
    Route::get('/{publisher}', [PublisherController::class, 'viewDetail'])->name('view-detail');
});

Route::get('/contact', [Controller::class, 'contact'])->name('contact');