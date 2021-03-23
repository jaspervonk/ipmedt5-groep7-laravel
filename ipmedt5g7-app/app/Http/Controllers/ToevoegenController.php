<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Shoppinglist;

class ToevoegenController extends Controller
{
    public function store(Request $request){
        $Shoppinglist = new Shoppinglist;
        $Shoppinglist->product = $request->input('product');
        $Shoppinglist->merk = $request->input('merk');
        $Shoppinglist->aantal = $request->input('aantal');
        $Shoppinglist->volume = $request->input('volume');
        $Shoppinglist->save();
        return redirect('/boodschappenlijst');
    }
}
