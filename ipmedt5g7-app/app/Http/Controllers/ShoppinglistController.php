<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\StoredProducts;
use \App\Models\Shoppinglist;
use \App\Models\UserShoppinglist;
use DB;


class ShoppinglistController extends Controller
{
    public function index(){
        if(\App\Models\ActiveShoppinglist::all()->first() != NULL){
            $selected = true;
        }   
        else{
            $selected = false;
        }

        return view ('boodschappen.boodschappenlijst', [
            'shoppinglistProducts' => \App\Models\Shoppinglist::all(),
            'user' => \App\Models\User::all(),
            'ActiveUser' => \App\Models\activeUserTable::all()->first(),
            'selected' => $selected,
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

    public function clearShoppinglist(\App\Models\UserShoppinglist $userShoppinglist, \App\Models\activeUserTable $activeUserTable, \App\Models\ActiveShoppinglist $activeshoppinglist){
        DB::table('shoppinglist')->where('shoppinglist->user', '=', $activeshoppinglist->activeshoppinglist)->delete();
        return redirect('/boodschappenlijst');
    }

    public function removeShoppinglist(\App\Models\UserShoppinglist $userShoppinglist, \App\Models\activeUserTable $activeUserTable, \App\Models\ActiveShoppinglist $activeshoppinglist){
        $lijst = DB::table('usershoppinglist');
        $activeshoppinglist = DB::table('activeshoppinglist')->first();
        foreach ($lijst as $lijst) {
            $lijst->where('shoppinglist', '=', $activeshoppinglist->activeshoppinglist)->delete();
        };
        //DB::table('shoppinglist')->where('shoppinglist->user', $activeshoppinglist->shoppinglist->first())->delete();
        // $query = $activeshoppinglist::all()->first();
        //DB::table('usershoppinglist')->where($userShoppinglist->shoppinglist->first(), '=', $query)->get();
        // $userShoppinglist->save();
        // $activeshoppinglist = $activeshoppinglist::all()->first();
        $activeshoppinglist->activeshoppinglist = 'Default';
        $activeshoppinglist->save();
        return redirect('/boodschappenlijst');
    }

    function plusOneShoppinglist(){
        
    }
}
