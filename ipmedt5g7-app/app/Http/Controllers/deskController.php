<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deskController extends Controller
{
    public function index(){
        return view('workspace.deskview', [
            // 'desktimer' => \App\Models\Desk::first()->work_minutes
            // 'pause_minutes' => \App\Models\Desk::skip(0)->first()->pause_minutes
            // 'work_minutes' => \App\Models\Desk::all()->take(2)->total_work_minutes,
            // 'total_pause_minutes' => \App\Models\Desk::first()->total_pause_minutes
            // 'total_work_minutes' => \App\Models\Desk::first()->skip(0)->first()->total_work_minutes,
            'working_status' => \App\Models\DeskWork::all()->first()->working_status,
            'actieve_deskjob' => \App\Models\Deskjob::first()->deskjob,
            'ActiveUser' => \App\Models\activeUserTable::all()->first(),
            
        ]);

        // return view('count.show')->with('count', Count::first()->amount);
    }

    public function show(){
        return view('workspace.progress', [
            // 'work_minutes' => \App\Models\Desk::all()->first()->total_work_minutes,
            // 'pause_minutes' => \App\Models\Desk::all()->first()->total_pause_minutes,
            // 'alle_tijden' => \App\Models\Desk::all(),

            'alle_tijden' => \App\Models\Desk::all()->where('deskjob', \App\Models\Deskjob::first()->deskjob),
            'alle_deskjobs' => \App\Models\AllDeskJobs::all(),
            'actieve_deskjob' => \App\Models\Deskjob::first()->deskjob,
            'ActiveUser' => \App\Models\activeUserTable::all()->first(),
        ]);
    }

    public function create(Request $request, \App\Models\AllDeskJobs $all_deskjobs){
        $all_deskjobs->deskjob = $request->input('deskjob_name');
        $all_deskjobs->save();
        return redirect('/desk/progress');
    }

    public function update(Request $request, \App\Models\Deskjob $active_deskjob){
        $active_deskjob = \App\Models\Deskjob::first();
        $active_deskjob->deskjob = $request->input('deskjob');
        $active_deskjob->save();
        return redirect('/desk/progress');
    }
}
