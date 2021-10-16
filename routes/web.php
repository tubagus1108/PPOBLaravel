<?php

use App\Http\Controllers\API\MobilePulsaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Covid19Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Provaider\ServiceController;
use App\Http\Middleware\DeveloperMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Auth;
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
Route::prefix('service')->group(function(){
    Route::get('belance',[ServiceController::class,'getSaldo']);
    Route::get('get-category',[ServiceController::class,'GetCategory']);
});
Route::get('/',[HomeController::class,'LandingPage'])->name('landing');
Route::get('login',[AuthController::class,'indexLogin'])->name('login-get');
Route::get('logout',[AuthController::class,'Logout'])->name('logout-get');
Route::post('login',[AuthController::class,'Login'])->name('login');
Route::middleware([DeveloperMiddleware::class],['auth'])->group(function(){
    Route::get('/developer',[HomeController::class,'IndexDev'])->name('home-developers');
});
Route::middleware([UserMiddleware::class],['auth'])->group(function(){
    Route::get('/user',[HomeController::class,'IndexMember'])->name('home-member');
});

