<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class AttendanceController extends Controller
{
    public function registerAttendanceview(){
        $user = Auth::user();
        $attendance = Attendance::where('user_id', Auth::id())->latest()->first();

        Carbon::setLocale('ja');
        $date = Carbon::now()->isoFormat('YYYY年M月D日(ddd)');
        $time = Carbon::now()->isoFormat('H:m');

        // $attendance = (object)[
        //     'at_work' => null,
        //     'leaving_work' => null,
        //     'start_rest' => null,
        //     'finish_rest' => null
        // ];

        return view('attendance', compact('user','date','time','attendance'));
    }

    public function atworkAttendance(Request $request){        
        $attendance = new Attendance();
        $attendance->user_id = Auth::id();
        $attendance->date = today();
        $attendance->at_work = now();
        $attendance->save();
        
        return redirect('attendance');
    }

    public function startrestAttendance(Request $request){        
        $attendance = Attendance::where('user_id', Auth::id())->where('date', today())->first();
        
        if ($attendance) {
            $attendance->start_rest = now();
            $attendance->save();
        }
        
        return redirect('attendance');
    }

    public function index(){
        return view('attendance_list');
    }
}