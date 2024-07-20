<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassPlanController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\FeatureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing_page');
});

Route::get('/welcome', function () {
    return view('landing_page');
});

Route::resource('class_plans', ClassPlanController::class);
Route::resource('videos', VideoController::class);
Route::resource('features', FeatureController::class);
