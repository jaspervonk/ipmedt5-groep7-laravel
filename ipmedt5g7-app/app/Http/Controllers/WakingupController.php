<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WakingupController extends Controller
{
    public function index(){
        return view ('wakingup.scores', [
            'sleepgunScores' => \App\Models\WakingupScores::all(),
            'wekkers' => \App\Models\Wekkers::all(),
        ]);
    }

    public function changeWekker(Request $request, \App\Models\Wekkers $wekkers){
        $wekkers = $wekkers::where('day', $request->input('dag'))->update(['hours'=>$request->input('uren'), 'minutes'=>$request->input('minuten')]);
        return redirect('/opstaan');
    }
}
