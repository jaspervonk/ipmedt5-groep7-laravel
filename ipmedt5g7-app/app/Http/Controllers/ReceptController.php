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
            'ActiveUser' => \App\Models\activeUserTable::all()->first(),
            'cijfer' => \App\Models\Cijfer::first()->waarde,
        ]);
    }

    public function info(){
        return view('koken.receptInfo', [
            'ActiveUser' => \App\Models\activeUserTable::all()->first(),
        ]);
    }


}
