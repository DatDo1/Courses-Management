<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PartVideoController;





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

// Register
Route::get('/admin/register', [RegisterController::class, 'index']);
Route::post('/admin/register', [RegisterController::class, 'store'])->name('adminRegister');

// Login
Route::get('', [LoginController::class, 'index']);
Route::get('/admin/login', [LoginController::class, 'index']);
Route::post('/admin/login', [LoginController::class, 'store'])->name('adminLogin');

// Logout 
Route::get('/admin/logout', [LoginController::class, 'destroy'])->name('adminLogout');

// Account
Route::get('/admin/list-account', [AccountController::class, 'index'])->name('listAccount');


// Category
Route::get('admin/list-category', [CategoryController::class, 'index'])->name('listCategory');
Route::get('admin/create-category', [CategoryController::class, 'create'])->name('createCategory');
Route::post('admin/create-category', [CategoryController::class, 'store'])->name('storeCategory');


// Course
Route::get('admin/list-course', [CourseController::class, 'index'])->name('listCourse');
Route::get('admin/create-course', [CourseController::class, 'create'])->name('createCourse');

// Video
Route::get('admin/list-video', [VideoController::class, 'index'])->name('listVideo');
Route::get('admin/create-video', [VideoController::class, 'create'])->name('createVideo');

//Part Video
Route::get('admin/list-part-video', [PartVideoController::class, 'index'])->name('listPartVideo');
Route::get('admin/create-part-video', [PartVideoController::class, 'create'])->name('createPartVideo');
