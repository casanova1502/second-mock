<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function registerAttendanceview(){
        return view('attendance');
    }

    public function index(){
        return view('attendance_list');
    }
}
