<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppinglistController extends Controller
{
    public function index(){
        $product = \App\Models\Shoppinglist::first();

        return view('boodschappenlijst', ['product' => $product->product]);
    }
}
