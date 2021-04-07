<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\StoredProducts;
use \App\Models\Shoppinglist;


class ShoppinglistController extends Controller
{
    // public function copyFromStoredProducts(Request $request){
    //     $shoppinglist = new Shoppinglist;
    //     $shoppinglist->product = $request['EAN'];

    // }
    public function index(){
        return view ('boodschappen.boodschappenlijst', [
            'product' => \App\Models\Shoppinglist::all(),
            'user' => \App\Models\User::all(),
            'ActiveUser' => \App\Models\activeUserTable::all(),
        ]);
        // $product = \App\Models\Shoppinglist::all();
        // return view('welcome', ['product' => $product]);
    }

    public function personalList(){
        return view ('boodschappen.boodschappenlijst', [
            'product' => \App\Models\Shoppinglist::all(),
            'user' => \App\Models\User::all(),
        ]);
    }
}
