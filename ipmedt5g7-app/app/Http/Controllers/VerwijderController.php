<?php

namespace App\Http\Controllers;

use Request;
use DB;

class VerwijderController extends Controller
{
    public function remove(Request $request){
        // DELETE FROM `table` WHERE `id` IN ($ids);
        $checked = Request::only('checked')['checked'];
        // $Shoppinglist->save();

        foreach ($checked as $id) {
            DB::table('shoppinglist')->where('id', '=' ,'$checked')->delete();
        }

        return redirect('/boodschappenlijst');
    }
}
