<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\blogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;

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
Route::get('/', [blogController::class, 'index'])->name('home');
Route::get('/blog/{slug}', [blogController::class, 'blogSingle']);
Route::get('/category/{categoryName}/{id}', [blogController::class, 'categoryIndex']);
Route::get('/tag/{tagName}/{id}', [blogController::class, 'tagIndex']);
Route::get('/Blogs', [blogController::class, 'allBlogs']);
Route::get('/search', [blogController::class, 'seachAll']);

Route::get('/products', [blogController::class, 'products'])->name('products');
Route::get('/gallery', [blogController::class, 'gallery'])->name('gallery');
Route::get('/about', [blogController::class, 'about'])->name('about');
Route::get('/contact', [blogController::class, 'contact'])->name('contact');

// Register route start from here
Route::post('/Register', [RegisterController::class, 'store']);
Route::get('/Register', [RegisterController::class, 'index'])->name('Register');
// Login route start from here
Route::post('/login', [loginController::class, 'store']);
Route::get('/login', [loginController::class, 'index'])->name('login');

