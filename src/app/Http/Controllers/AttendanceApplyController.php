<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AttendanceApplyController extends Controller
{
    public function storeView(){
        return view('attendance_id');
    }

    public function apply(){
        return view('stamp_correction_request_list');
    }
}
