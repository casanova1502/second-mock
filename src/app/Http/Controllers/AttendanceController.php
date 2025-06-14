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
        // $now = Carbon::now();
        return view('attendance', compact('user'));
    }

    public function index(){
        return view('attendance_list');
    }
}