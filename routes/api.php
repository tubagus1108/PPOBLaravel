<?php

use App\Http\Controllers\Provaider\GopayController;
use App\Http\Controllers\Provaider\OvoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Provaider\ServiceController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::prefix('service')->group(function(){
    Route::get('belance',[ServiceController::class,'getSaldo']);
    Route::post('get-category',[ServiceController::class,'getLayanan']);
    Route::get('add-layanan',[ServiceController::class,'addLayanan']);
    Route::post('json-search',[ServiceController::class,'getSearchNumber']);
});
Route::post('gopay',[GopayController::class,'konfirmasiCode']);
Route::post('ovo',[OvoController::class,'sendRequest2FA']);