<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ClinicController;

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
Route::post('login', [LoginController::class, 'signIn']);
Route::post('logout', [LogoutController::class, 'logout']);
Route::apiResource('doctor', App\Http\Controllers\DoctorController::class);
// Route::apiResource('doctor',[DoctorController::class]);

Route::get('clinic', [ClinicController::class, 'index']);
// Route::post('doctor', [DoctorController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});