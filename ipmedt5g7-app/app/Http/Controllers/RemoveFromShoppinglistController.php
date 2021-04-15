<?php

namespace App\Http\Controllers;

use Request;
use DB;

class RemoveFromShoppinglistController extends Controller
{
    //Deze functie haalt alle items uit het lijstje die afgevinkt ('checked') zijn.
    public function remove(Request $request){
        $checked = Request::all('checked')['checked'];
        if ($checked != null){
            foreach ($checked as $checked) {
                DB::table('shoppinglist')->where('id', '=', $checked)->delete();//Als item checked is, verwijder hem uit schoppinglist
            }
            return redirect('/boodschappenlijst');
        }
        else{
            return redirect('/boodschappenlijst');
        }
    }
}
