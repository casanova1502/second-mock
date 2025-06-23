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
        // $attendance = App\Models\Attendance::where('user_id', Auth::id())->latest()->first();

        Carbon::setLocale('ja');
        $date = Carbon::now()->isoFormat('YYYY年M月D日(ddd)');
        $time = Carbon::now()->isoFormat('H:m');

        $attendance = (object)[
            'at_work' => null,
            'leaving_work' => null,
        ];

        return view('attendance', compact('user','date','time','attendance'));
    }

    public function startAttendancestore(Request $request){        
        // $date = $request->only(['date']);
        // $time = $request->only(['time']);
        return redirect('attendance');
    }

    public function index(){
        return view('attendance_list');
    }
}