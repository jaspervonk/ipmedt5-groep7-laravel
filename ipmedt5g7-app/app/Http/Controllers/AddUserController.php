<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\activeUserTable;
use DB;

class AddUserController extends Controller
{
    public function create(Request $request, \App\Models\User $user, \App\Models\ActiveShoppinglist $ActiveShoppinglist){
        $user->name = $request->input('name');
        $user->save();
        DB::table('activeUser')->where('id', 1)
            ->update(array('name' => $user->name)
        );
        DB::table('usershoppinglist') 
            ->insert(array('user' => $user->name, 'shoppinglist' => "Default")
        );
        if($ActiveShoppinglist->activeshoppinglist == null){
            DB::table('activeshoppinglist')
                ->insert(array('activeshoppinglist' => 'Default')
            );
        }else{
            DB::table('activeshoppinglist')->where('id', 1)
                ->update(array('activeshoppinglist' => 'Default')
            );
        }
        return redirect('/gebruiker');
    }

    public function changeUser(){
        return view('boodschappen.changeUser', ['user' => \App\Models\User::all()]);
    }

    public function gebruikerChange(){
        return view('gebruiker.gebruikerUser', ['user' => \App\Models\User::all()]);
    }

    public function ToPersonalPage(Request $request, \App\Models\activeUserTable $activeUserTable, \App\Models\ActiveShoppinglist $activeShoppinglistTable){
        $activeUserTable = activeUserTable::all()->first();
        $activeUserTable->name = $request->input('naam');
        $activeUserTable->save();
        return redirect('/gebruiker');
    }
}
