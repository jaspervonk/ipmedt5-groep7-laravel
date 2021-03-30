<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deskController extends Controller
{
    public function index(){
        return view('workspace.deskview', [
            // 'sushi' => \App\Models\Sushi::all(),
            // 'desktimer' => \App\Models\Desk::first()->work_minutes
            // 'pause_minutes' => \App\Models\Desk::skip(0)->first()->pause_minutes

            // 'work_minutes' => \App\Models\Desk::all()->take(2)->total_work_minutes,
            // 'total_pause_minutes' => \App\Models\Desk::first()->total_pause_minutes


            // 'total_work_minutes' => \App\Models\Desk::first()->skip(0)->first()->total_work_minutes,

            
            'working_status' => \App\Models\DeskWork::all()->first()->working_status,
            
        ]);

        // return view('count.show')->with('count', Count::first()->amount);
    }

    public function show(){
        return view('workspace.progress', [
            // 'working_status' => \App\Models\DeskWork::all()->first()->working_status,
            
        ]);
    }
}
