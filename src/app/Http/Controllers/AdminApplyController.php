<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminApplyController extends Controller
{
    public function index(){
        return view('stamp_correction_request_list');
    }

    public function approval(){
        return view('admin/stamp_correction_request_approve_attendance_correct_request');
    }
}
