<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WakingupController extends Controller
{
    public function index(){
        return view ('wakingup.scores', [
            'activeUser' => \App\Models\activeUserTable::all()->first(),
            'sleepgunScores' => \App\Models\WakingupScores::all(),
            'wekkers' => \App\Models\Wekkers::all(),
            'ActiveUser' => \App\Models\activeUserTable::all()->first(),
        ]);
    }

    public function changeWekker(Request $request, \App\Models\Wekkers $wekkers){
        $wekkers = $wekkers::where('day', $request->input('dag'))->update(['hours'=>$request->input('uren'), 'minutes'=>$request->input('minuten')]);
        return redirect('/opstaan');
    }
}
