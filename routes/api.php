<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\AppoimentController;

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



Route::post('register', [RegisterController::class, 'signUp']);
Route::apiResource('doctor', App\Http\Controllers\DoctorController::class);

Route::get('clinic', [ClinicController::class, 'index']);
Route::get('appoiment', [AppoimentController::class, 'index']);
Route::post('login', [LoginController::class, 'signIn']);

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('logout', [\App\Http\Controllers\LogoutController::class, 'logout']);
    });