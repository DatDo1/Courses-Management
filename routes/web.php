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
Route::get('admin/category/{id}', [CategoryController::class, 'edit']);
Route::post('admin/category', [CategoryController::class, 'update'])->name('updateCategory');
Route::delete('admin/category/{id}/delete', [CategoryController::class, 'destroy'])->name('deleteCategory');

// Course
Route::get('admin/list-course', [CourseController::class, 'index'])->name('listCourse');
Route::get('admin/create-course', [CourseController::class, 'create'])->name('createCourse');
Route::post('admin/create-course', [CourseController::class, 'store'])->name('storeCourse');
Route::get('admin/course/{id}', [CourseController::class, 'edit']);
Route::post('admin/course', [CourseController::class, 'update'])->name('updateCourse');
Route::delete('admin/course/{id}/delete', [CourseController::class, 'destroy'])->name('deleteCourse');

// Video
Route::get('admin/list-video', [VideoController::class, 'index'])->name('listVideo');
Route::get('admin/create-video', [VideoController::class, 'create'])->name('createVideo');
Route::post('admin/create-video', [VideoController::class, 'store'])->name('storeVideo');
Route::get('admin/video/{id}', [VideoController::class, 'edit']);
Route::post('admin/video', [VideoController::class, 'update'])->name('updateVideo');
Route::delete('admin/video/{id}/delete', [VideoController::class, 'destroy'])->name('deleteVideo');

//Part Video
Route::get('admin/list-part-video', [PartVideoController::class, 'index'])->name('listPartVideo');
Route::get('admin/create-part-video', [PartVideoController::class, 'create'])->name('createPartVideo');
Route::post('admin/create-part-video', [PartVideoController::class, 'store'])->name('storePartVideo');
Route::get('admin/part-video/{id}', [PartVideoController::class, 'edit']);
Route::post('admin/part-video', [PartVideoController::class, 'update'])->name('updatePartVideo');
Route::delete('admin/part-video/{id}/delete', [PartVideoController::class, 'destroy'])->name('deletePartVideo');
