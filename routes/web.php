<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;

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

// User Page
Route::get('/', [PageController::class, 'home']);
Route::get('/store', [PageController::class, 'store']);
Route::get('/news', [PageController::class, 'news']);
Route::get('/news/detail', [PageController::class, 'newsdetail']);
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/login', [PageController::class, 'login']);

// Admin Page
Route::get('/dashboard', function () {
  return view('dashboard');
});

Route::resource('/product', ProductController::class);
Route::resource('/news', NewsController::class);
Route::resource('/gallery', GalleryController::class);