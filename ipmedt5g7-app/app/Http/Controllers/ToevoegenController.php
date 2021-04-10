<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\StoredProducts;
class ToevoegenController extends Controller
{
    public function store(Request $request){
        $StoredProducts = new StoredProducts;
        $StoredProducts->EAN = $request->input('EAN');
        $StoredProducts->product = $request->input('product');
        $StoredProducts->merk = $request->input('merk');
        $StoredProducts->volume = $request->input('volume');
        $StoredProducts->save();
        return redirect('/boodschappenlijst');
    }
}
