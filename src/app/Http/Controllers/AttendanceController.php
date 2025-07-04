<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Rest;
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

        return view('attendance', compact('user','attendance','date','time',));
    }

    public function atworkAttendance(Request $request){        
        $user = Auth::user();
        $attendance = Attendance::where('user_id', Auth::id())->latest()->first();

        Carbon::setLocale('ja');
        $date = Carbon::now()->isoFormat('YYYY年M月D日(ddd)');
        $time = Carbon::now()->isoFormat('H:m');
        
        $attendance = new Attendance();
        $attendance->user_id = Auth::id();
        $attendance->date = today();
        $attendance->at_work = now();
        $attendance->save();
        
        return view('attendance', compact('user','attendance','date','time',));
    }

    public function startRest(Request $request){        
        $user = Auth::user();
        $attendance = Attendance::where('user_id', Auth::id())->latest()->first();

        Carbon::setLocale('ja');
        $date = Carbon::now()->isoFormat('YYYY年M月D日(ddd)');
        $time = Carbon::now()->isoFormat('H:m');

        if ($attendance) {
            $rest = new Rest();
            $rest->attendance_id = $attendance->id;
            $rest->start_rest = now();
            $rest->save();
        }

        return view('attendance', compact('user','attendance','date','time', 'rest'));
    }

    public function finishRest(Request $request){        
        $user = Auth::user();
        $attendance = Attendance::where('user_id', Auth::id())->latest()->first();

        Carbon::setLocale('ja');
        $date = Carbon::now()->isoFormat('YYYY年M月D日(ddd)');
        $time = Carbon::now()->isoFormat('H:m');
        $rest = Rest::where('attendance_id', $attendance->id)->latest()->first();
        
        // if ($rest) {
            $rest->finish_rest = now();

            $start = Carbon::parse($rest->start_rest);
            $finish = Carbon::parse($rest->finish_rest);
            $breakMinutes = $start->diffInMinutes($finish);
            $rest->rest = $breakMinutes;
            $rest->save();
        // }
        
        return view('attendance', compact('user','attendance','date','time', 'rest'));
    }

    public function leavingworkAttendance(Request $request){        
        $user = Auth::user();
        $attendance = Attendance::where('user_id', Auth::id())->latest()->first();

        Carbon::setLocale('ja');
        $date = Carbon::now()->isoFormat('YYYY年M月D日(ddd)');
        $time = Carbon::now()->isoFormat('H:m');
        
        if ($attendance) {
            $attendance->leaving_work = now();

            $start = Carbon::parse($attendance->at_work);
            $finish = Carbon::parse($attendance->leaving_work);
            $workingkMinutes = $start->diffInMinutes($finish);

            $attendance->total = $workingkMinutes;

            $attendance->save();
        }
        
        return view('attendance', compact('user','attendance','date','time',));
    }

    public function index(){
        $user = Auth::user();
        $attendances = Attendance::all();
        $rests = Rest::all();

        Carbon::setLocale('ja');
        setlocale(LC_TIME, 'ja_JP.UTF-8');
        foreach ($attendances as $attendance) {
            if ($attendance->date) {
            $attendance->formatted_date = Carbon::parse($attendance->date)->isoFormat('MM/DD（dd）');
            } else {
            $attendance->formatted_date = null;
            }

            if ($attendance->at_work) {
            $attendance->formatted_at_work = Carbon::parse($attendance->at_work)->isoFormat('HH:mm');
            } else {
            $attendance->formatted_at_work = null;
            }

            if ($attendance->leaving_work) {
            $attendance->formatted_leaving_work = Carbon::parse($attendance->leaving_work)->isoFormat('HH:mm');
            } else {
            $attendance->formatted_leaving_work = null;
            }

            if ($attendance->total) {
            $attendance->formatted_total = sprintf('%d:%02d', floor($attendance->total / 60), $attendance->total % 60);
            } else {
            $attendance->formatted_total = null;
            }
        }

        foreach ($rests as $rest) {
            if ($rest->rest) {
            $rest->formatted_rest = sprintf('%d:%02d', floor($rest->rest / 60), $rest->rest % 60);
            } else {
            $rest->formatted_rest = null;
            }
        }

        return view('attendance_list', compact('user', 'attendances','rests'));
    }
}