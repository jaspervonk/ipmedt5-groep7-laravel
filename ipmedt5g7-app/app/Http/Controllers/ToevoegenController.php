<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Shoppinglist;

class ToevoegenController extends Controller
{
    public function store(Request $request){
        //print_r($request->input());
        // $Shoppinglist = new Shoppinglist;
        // $Shoppinglist = $request->product;
        // $Shoppinglist = $request->aantal;
        // $Shoppinglist = $request->merk;
        // $Shoppinglist = $request->volume;
        // echo $Shoppinglist->save();
        // return $request->input();
//--------------------------------------------------------------------------------------
        $Shoppinglist = new Shoppinglist;
        $Shoppinglist => request('product'),
        $Shoppinglist => request('aantal'),
        $Shoppinglist => request('merk'),
        $Shoppinglist => request('volume'),
        echo $Shoppinglist->save(),
        return $request->input();

    }
}
