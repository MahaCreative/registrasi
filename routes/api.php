<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\ProdiControllerr;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::post('login', LoginController::class)->name('login');
Route::middleware('auth:sanctum')->group(function () {
});
route::get('logout', LogoutController::class);
Route::get('dashboard', [DashboardController::class, "index"])->name("dashboard-admin");
Route::apiResource('user', UserController::class);
Route::apiResource('fakultas', FakultasController::class);
Route::apiResource('prodi', ProdiControllerr::class);
Route::apiResource('profile', ProfileController::class);