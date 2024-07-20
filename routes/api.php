<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WatchTimeController;
use App\Http\Controllers\ProfitSharingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/watch-times', [WatchTimeController::class, 'store']);
Route::delete('/watch-times/{id}', [WatchTimeController::class, 'destroy']);
Route::get('/profit-sharing', [ProfitSharingController::class, 'calculate']);
