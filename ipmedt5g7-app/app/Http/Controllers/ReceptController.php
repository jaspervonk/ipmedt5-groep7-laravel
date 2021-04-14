<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptController extends Controller
{
    public function index(){
        return view ('koken.recepten', [
            'recepten' => \App\Models\Recepten::all(),
            'ActiveUser' => \App\Models\activeUserTable::all()->first(),
        ]);
    }

    public function show($id){
        return view ('koken.recept', [
            'recepten' => \App\Models\Recepten::find($id),
            'ActiveUser' => \App\Models\activeUserTable::all()->first(),
        ]);
    }

    public function klaar($id){
        return view ('koken.receptKlaar', [
            'recepten' => \App\Models\Recepten::find($id),
            'activeUser' => \App\Models\activeUserTable::all(),
            'cijfer' => \App\Models\Cijfer::first()->waarde,
        ]);
    }
}
