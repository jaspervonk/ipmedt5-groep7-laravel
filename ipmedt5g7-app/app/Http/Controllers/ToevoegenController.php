<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\StoredProducts;

class ToevoegenController extends Controller
{
    public function store(Request $request){
        $stored_products = new stored_products;
        $stored_products->product = $request->input('EAN');
        $stored_products->product = $request->input('product');
        $stored_products->merk = $request->input('merk');
        //$Shoppinglist->aantal = $request->input('aantal');
        $stored_products->volume = $request->input('volume');
        $stored_products->save();
        return redirect('/boodschappenlijst');
    }
}
