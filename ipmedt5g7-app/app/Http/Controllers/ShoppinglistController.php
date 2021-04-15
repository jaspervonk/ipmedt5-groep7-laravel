<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\StoredProducts;
use \App\Models\Shoppinglist;
use \App\Models\UserShoppinglist;
use DB;


class ShoppinglistController extends Controller
{
    //Controleer of er een lijstje actief is.
    public function index(){
        if(\App\Models\ActiveShoppinglist::all()->first() != NULL){
            $selected = true;
        }   
        else{
            $selected = false;
        }

        //Deze view wordt geretouneerd als er een lijstje actief is:
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

    //Deze functie voegt een nieuw booschappenlijstje toe aan de usershoppinglist tabel. 
    public function addShoppinglist(Request $request, \App\Models\UserShoppinglist $userShoppinglist, \App\Models\activeUserTable $activeUserTable){
        $userShoppinglist = new $userShoppinglist;
        $userShoppinglist->user = $activeUserTable::all()->first()->name; //Hier wordt de gebruiker die het lijstje aanmaakt meegegeven aan de tabel.
        $userShoppinglist->shoppinglist = $request->input('name');
        $userShoppinglist->save();
        return redirect('/boodschappenlijst');
    }

    //Met deze functie kan de gebruiker kiezen uit een bestaande functie en deze op actief zetten, zodat de producten bij toevoegen automatisch op dit lijstje komen.
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

    //Deze functie maakt bij aanroepen het momenteel op actief ingestelde lijstje helemaall leeg.
    public function clearShoppinglist(\App\Models\UserShoppinglist $userShoppinglist, \App\Models\activeUserTable $activeUserTable, \App\Models\ActiveShoppinglist $activeshoppinglist, \App\Models\Shoppinglist $shoppinglist){
        $activeshoppinglist = DB::table('activeshoppinglist')->first();
        DB::table('shoppinglist')->where('shoppinglist', '=' ,$activeshoppinglist->activeshoppinglist)->delete();
        return redirect('/boodschappenlijst');
    }

    //Deze functie slaat in de form aangemaakte producten op in de tabel.
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
