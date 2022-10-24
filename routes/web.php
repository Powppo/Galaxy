<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthController;
use App\http\Controllers\FeatureController;

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

Route::get('/', function () {
    return view('layout.index');
});

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/index', [FeatureController::class, 'index']);
Route::get('/tam', [FeatureController::class, 'tam']);
Route::get('/upload', [FeatureController::class, 'upload']);
Route::get('/expoint', [FeatureController::class, 'expoint']);
Route::get('/contact', [FeatureController::class, 'contact']);