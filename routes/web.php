<?php
use Spatie\Sitemap\SitemapGenerator;
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
Route::get('/insights', [WebController::class, 'insights']);
Route::get('/terms', [WebController::class, 'terms']);


Route::get('sitemap', function(){

    SitemapGenerator::create('http://127.0.0.1')->writeToFile('sitemap.xml');
    return 'sitemap created';
});

