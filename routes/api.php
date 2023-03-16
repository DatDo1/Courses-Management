<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\LoginController;
use App\Http\Controllers\api\VideoController;
use App\Http\Controllers\api\CourseController;
use App\Http\Controllers\api\SearchController;
use App\Http\Controllers\api\AccountController;

use App\Http\Controllers\api\CommentController;
use App\Http\Controllers\api\RegisterController;
use App\Http\Controllers\api\PartVideoController;
use App\Http\Controllers\api\ResetPasswordController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('courses', CourseController::class);

Route::apiResource('register', RegisterController::class);

Route::apiResource('login', LoginController::class);

Route::apiResource('comments', CommentController::class);

Route::apiResource('videos', VideoController::class);

Route::apiResource('parts-video', PartVideoController::class);

Route::apiResource('search', SearchController::class);

Route::apiResource('account', AccountController::class);
Route::post('check-email', [AccountController::class, 'checkEmail']);

Route::post('reset-password', [ResetPasswordController::class, 'sendMail']);
Route::put('reset-password/{token}', [ResetPasswordController::class, 'reset']);

