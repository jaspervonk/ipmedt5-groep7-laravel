<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\activeUserTable;

class GebruikerController extends Controller
{
    public function gebruiker(){
        return view ('gebruiker.gebruiker', [
            'product' => \App\Models\Shoppinglist::all(),
            'user' => \App\Models\User::all(),
            'ActiveUser' => \App\Models\activeUserTable::all(),
            'activeShoppinglist' => \App\Models\ActiveShoppinglist::all()->first(),
        ]);
    }
}
