<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deskController extends Controller
{
    public function show(){
        return view('workspace.deskview', [
            // 'sushi' => \App\Models\Sushi::all()
        ]);
    }
}
