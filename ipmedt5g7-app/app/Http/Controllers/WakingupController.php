<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WakingupController extends Controller
{
    public function index(){
        return view ('wakingup.scores', [
            'sleepgunScores' => \App\Models\WakingupScores::all(),
        ]);
    }
}
