<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceApplyController extends Controller
{
    public function storeView(){
        return view('attendance_id');
    }

    public function apply(){
        return view('stamp_correction_request_list');
    }
}
