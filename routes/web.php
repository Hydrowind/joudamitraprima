<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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
Route::get('/store', [PageController::class, 'store'])->name('store');
Route::get('/news', [PageController::class, 'news']);
Route::get('/news/detail/{id}', [PageController::class, 'newsdetail'])->name('newsdetail');
Route::get('/gallery', [PageController::class, 'gallery']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/login', [PageController::class, 'login']);

// Authorization
Route::controller(AuthController::class)->group(function () {
  Route::get('/login', 'login')->name('login');
  Route::post('/signin', 'signin')->name('signin');
  Route::get('/signout', 'signout')->name('signout');
});

// Admin Page
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
  Route::resources([
    'product'     => ProductController::class,
    'news'        => NewsController::class,
    'gallery'     => GalleryController::class,
  ]);
  // Route::resource('users', UserController::class)->middleware('superadmin');
});
