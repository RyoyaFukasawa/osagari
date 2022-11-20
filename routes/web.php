<?php

use App\Http\Controllers\Web\Auth\AuthController;
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

Route::group(['middleware' => ['guest']], function () {
    // google認証
    Route::get('/auth/redirect', [AuthController::class, 'redirectToGoogle']);

    Route::get('/callback/google', [AuthController::class, 'handleGoogleCallback']);

    Route::get('/guest/{any?}/{param?}', function () {
        return view('web.guest');
    })->where('all', '.*')->name('guest');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/{all?}', function () {
        return view('web.member');
    })->where('all', '.*')->name('member');
});