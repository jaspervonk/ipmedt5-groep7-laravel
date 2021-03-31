<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\activeUserTable;

class AddUserController extends Controller
{
    public function create(Request $request, \App\Models\User $user){
        $user->name = $request->input('name');
        $user->save();
        //return $activeUser;
        return redirect('/boodschappenlijst');
    }

    public function changeUser(){
        return view('boodschappen.changeUser', ['user' => \App\Models\User::all()]);
    }

    public function ToPersonalPage(Request $request, \App\Models\activeUserTable $activeUserTable){
        $activeUserTable = activeUserTable::all()->first();
        $activeUserTable->name = $request->input('naam');
        $activeUserTable->save();
        //print($activeUserTable);
        return redirect('/boodschappenlijst');
    }
}
