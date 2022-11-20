<?php

use App\Http\Controllers\Api\Auth\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::post('/register/social', [AuthController::class, 'store']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/user', [AuthController::class, 'me']);

Route::get('/register/email',[AuthController::class, 'completeEmail']);