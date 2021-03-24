<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppinglistController extends Controller
{
    public function index(){
        return view ('boodschappen.boodschappenlijst', [
            'product' => \App\Models\Shoppinglist::all(),
        ]);
        // $product = \App\Models\Shoppinglist::all();
        // return view('welcome', ['product' => $product]);
    }
}
