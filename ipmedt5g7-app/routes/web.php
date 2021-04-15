<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ToevoegenController;
use Illuminate\Support\Facades\Http;
use App\Models\User;

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
Route::get('/', [App\Http\Controllers\GebruikerController::class, 'gebruiker']);

Route::get('/opstaan', [\App\Http\Controllers\WakingupController::class, 'index']);
Route::post('/changeWekker', [App\Http\Controllers\WakingupController::class, 'changeWekker']);

Route::get('/recepten/{id}', [\App\Http\Controllers\ReceptController::class, 'show']);
Route::get('/recepten/{id}/klaar', [\App\Http\Controllers\ReceptController::class, 'klaar']);
Route::get('/recepten', [\App\Http\Controllers\ReceptController::class, 'index']);
Route::get('/receptInfo', [\App\Http\Controllers\ReceptController::class, 'info']);

Route::get('/boodschappenlijst', [App\Http\Controllers\ShoppinglistController::class, 'index']);
Route::post('/boodschappenlijst/create', [App\Http\Controllers\ShoppinglistController::class, 'addShoppinglist']);
Route::post('/boodschappenlijst/change', [App\Http\Controllers\ShoppinglistController::class, 'changeShoppinglist']);
Route::post('/boodschappenlijst/clear', [App\Http\Controllers\ShoppinglistController::class, 'clearShoppinglist']);
Route::post('/boodschappenlijst/remove', [App\Http\Controllers\RemoveFromShoppinglistController::class, 'remove']);
Route::post('/boodschappenlijst/store', [App\Http\Controllers\ShoppinglistController::class, 'store']);
Route::post('/boodschappenlijst/api', [App\Http\Controllers\ApiController::class, 'api']);

Route::post('/addUser', [App\Http\Controllers\AddUserController::class, 'create']);
Route::get('/change', [App\Http\Controllers\AddUserController::class, 'changeUser']);
Route::post('/changeUser', [App\Http\Controllers\AddUserController::class, 'ToPersonalPage']);
Route::get('/gebruiker', [App\Http\Controllers\GebruikerController::class, 'gebruiker']);
Route::post('/gebruikerChange', [App\Http\Controllers\AddUserController::class, 'ToPersonalPage']);

Route::get('/desk', [\App\Http\Controllers\deskController::class, 'index']);
Route::get('/desk/progress', [\App\Http\Controllers\deskController::class, 'show']);
Route::post('/addDeskjob', [App\Http\Controllers\deskController::class, 'create']);
Route::post('/selectDeskjob', [App\Http\Controllers\deskController::class, 'update']);


