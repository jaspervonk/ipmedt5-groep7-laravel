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
            'activeShoppinglist' => \App\Models\ActiveShoppinglist::all()->first(),
            'userShoppinglists' => \App\Models\UserShoppinglist::all(),
        ]);
    }

    public function personalList(){
        return view ('boodschappen.boodschappenlijst', [
            'product' => \App\Models\Shoppinglist::all(),
            'user' => \App\Models\User::all(),
        ]);
    }

    public function addShoppinglist(Request $request, \App\Models\UserShoppinglist $userShoppinglist, \App\Models\activeUserTable $activeUserTable){
        $userShoppinglist = new $userShoppinglist;
        $userShoppinglist->user = $activeUserTable::all()->first()->name;
        $userShoppinglist->shoppinglist = $request->input('name');
        $userShoppinglist->save();
        return redirect('/boodschappenlijst');
    }

    public function changeShoppinglist(Request $request, \App\Models\ActiveShoppinglist $activeShoppinglist){
        if($activeShoppinglist::all()->first() != NULL){
            $activeShoppinglist = $activeShoppinglist::all()->first();
            $activeShoppinglist->activeshoppinglist = $request->input('naam');
            $activeShoppinglist->save();
            return redirect('/boodschappenlijst');
        }
        else{
            $activeShoppinglist = new $activeShoppinglist;
            $activeShoppinglist->activeshoppinglist = $request->input('naam');
            $activeShoppinglist->save();
            return redirect('/boodschappenlijst');
        }
    }
}
