<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/about', [PagesController::class,'about']
);

Route::get('/',[ProductController::class, 'index'])->name('index');
Route::get('/product-details/{id}',[ProductController::class, 'productDetails']);
Route::get('/add-product',[ProductController::class, 'addProduct']);
Route::post('/add-product',[ProductController::class, 'addProductPost']);
Route::get('/edit-product/{id}',[ProductController::class, 'editProduct']);
Route::post('/edit-product/{id}',[ProductController::class, 'editProductPost']);
Route::delete('/delete-product/{id}', [ProductController::class, 'deleteProduct']);

Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');