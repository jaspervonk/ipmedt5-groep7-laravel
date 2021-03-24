<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppinglistController extends Controller
{
    public function index(){
        $product = \App\Models\Shoppinglist::all();
        return view('welcome', ['product' => $product]);
    }
}
