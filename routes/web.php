<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'index']);
Route::get('/operations', [WebController::class, 'operations']);
Route::get('/insights1', [WebController::class, 'insights1']);
Route::get('/insights2', [WebController::class, 'insights2']);
Route::get('/terms', [WebController::class, 'terms']);

