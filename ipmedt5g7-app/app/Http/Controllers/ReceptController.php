<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptController extends Controller
{
    public function index(){
        return view ('koken.recepten', [
            'recepten' => \App\Models\Recepten::all(),
        ]);
    }
}
