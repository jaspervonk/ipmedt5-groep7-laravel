<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ToevoegenController;

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
    return view('welcome');
});

Route::get('/recepten', [\App\Http\Controllers\ReceptController::class, 'index']);

Route::get('/boodschappenlijst', [App\Http\Controllers\ShoppinglistController::class, 'index']);

Route::post('/submit', [App\Http\Controllers\ToevoegenController::class, 'store']);

Route::post('/remove', [App\Http\Controllers\VerwijderController::class, 'remove']);

Route::post('/add', [App\Http\Controllers\CopyFromStoredProductsController::class, 'add']);

Route::get('/api', [App\Http\Controllers\ApiController::class, 'api']);







