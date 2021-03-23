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
Route::get('/boodschappenlijst', [App\Http\Controllers\ShoppinglistController::class, 'index']);

// Route::get('/submit', function(){
//     //return view('welcome');
//     return controller('ToevoegenController@save');
// });

Route::post('/submit', [App\Http\Controllers\ToevoegenController::class, 'store']);

Route::get('/', function () {
    return view('welcome');
});
