<?php

namespace App\Http\Controllers;

use Request;
use DB;

class VerwijderController extends Controller
{
    public function remove(Request $request){
        $checked = Request::all('checked')['checked'];
        if ($checked != null){
            foreach ($checked as $checked) {
                DB::table('shoppinglist')->where('id', '=', $checked)->delete();
            }
            return redirect('/boodschappenlijst');
        }
        else{
            echo 'Selecteer ten minste één vakje.';
            return redirect('/boodschappenlijst');
        }
        
        
        
    }
}