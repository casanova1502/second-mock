<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAttendanceController extends Controller
{
    public function index(){
        return view('admin/admin_attendance_list');
    }

    public function storeView(){
        return view('admin/attendance_id');
    }

    public function staffIndex(){
        return view('admin/admin_staff_list');
    }
    
    public function staffAttendanceindex(){
        return view('admin/admin_attendance_staff_id');
    }  
}
