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

Route::get('/recepten/{id}', [\App\Http\Controllers\ReceptController::class, 'show']);

Route::get('/recepten', [\App\Http\Controllers\ReceptController::class, 'index']);

Route::get('/boodschappenlijst', [App\Http\Controllers\ShoppinglistController::class, 'index']);

Route::post('/submit', [App\Http\Controllers\ToevoegenController::class, 'store']);

Route::post('/remove', [App\Http\Controllers\VerwijderController::class, 'remove']);

Route::get('/desk', [\App\Http\Controllers\deskController::class, 'show']);
