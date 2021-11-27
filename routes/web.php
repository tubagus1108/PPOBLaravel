<?php

use App\Http\Controllers\API\MobilePulsaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Covid19Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Provaider\ServiceController;
use App\Http\Controllers\WEB\OrderController;
use App\Http\Controllers\WEB\PageController;
use App\Http\Controllers\WEB\PriceTopUPController;
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
// Route::prefix('service')->group(function(){
//     Route::get('belance',[ServiceController::class,'getSaldo']);
//     Route::post('get-category',[ServiceController::class,'GetCategory']);
//     Route::get('add-layanan',[ServiceController::class,'addLayanan']);
// });
Route::get('/',[HomeController::class,'LandingPage'])->name('landing');
Route::prefix('auth')->group(function(){
    Route::get('login',[AuthController::class,'indexLogin']);
    Route::post('login',[AuthController::class,'Login'])->name('login');
    Route::get('register',[AuthController::class,'register']);
    Route::get('forgot-password',[AuthController::class,'forgotpassword']);
    Route::get('logout',[AuthController::class,'Logout'])->name('logout-get');
});
Route::prefix('page')->group(function(){
    Route::get('tos',[PageController::class,'tos'])->name('tos');
    Route::get('faq',[PageController::class,'faq'])->name('faq');
});
// Route::prefix('price')->group(function(){
//     Route::get('price',[PriceTopUPController::class,'index'])->name('price');
//     Route::get('price-datatable',[PriceTopUPController::class,'priceDatatable'])->name('price-datatable');
// });
// Route::middleware([DeveloperMiddleware::class],['auth'])->group(function(){
//     Route::get('/developer',[HomeController::class,'IndexDev'])->name('home-developers');
// });
// Route::middleware([UserMiddleware::class],['auth'])->group(function(){
//     Route::get('/user',[HomeController::class,'IndexMember'])->name('home-member');
//     Route::prefix('order')->group(function(){
//         Route::get('pulsa-reguler',[OrderController::class,'pulsa_reguler'])->name('pulsa-reguler');
//     });
// });

