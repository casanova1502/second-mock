<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AttendanceApplyController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAttendanceController;
use App\Http\Controllers\AdminApplyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'registerStore']);
Route::get('/login', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginStore']);
Route::post('/logout', [UserController::class, 'logout']);
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
});
Route::get('/attendance', [AttendanceController::class, 'registerAttendanceview']);
Route::get('/attendance/list', [AttendanceController::class, 'index']);
Route::get('/attendance/id', [AttendanceApplyController::class, 'storeView']);
Route::get('/stamp_correction_request/list', [AttendanceApplyController::class, 'apply']);
Route::get('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/attendance/list', [AdminAttendanceController::class, 'index']);
Route::get('/admin/attendance/id', [AdminAttendanceController::class, 'storeView']);
// 本来は/attendance/idだが、一時的に区別するために分けて記載中。
Route::get('/admin/staff/list', [AdminAttendanceController::class, 'staffIndex']);
Route::get('/admin/attendance/staff/id', [AdminAttendanceController::class, 'staffAttendanceindex']);
Route::get('/stamp_correction_request/list', [AdminApplyController::class, 'index']);
Route::get('stamp_correction_request/approve/attendance_correct_request', [AdminApplyController::class, 'approval']);
