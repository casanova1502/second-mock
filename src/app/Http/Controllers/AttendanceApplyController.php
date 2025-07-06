<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Attendance;
use App\Models\Rest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class AttendanceApplyController extends Controller
{
    public function storeView($id){
        $user = Auth::user();
        $attendance = Attendance::where('id', $id)->where('user_id', $user->id)->firstOrFail();
        
        return view('attendance_id',compact('user', 'attendance', 'id'));
    }

    public function apply(){
        return view('stamp_correction_request_list');
    }
}
