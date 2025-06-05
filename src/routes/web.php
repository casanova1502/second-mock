<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\AttendanceApplyController;
use App\Http\Controllers\AdminController;

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
Route::get('/login', [UserController::class, 'login']);
Route::get('/attendance', [AttendanceController::class, 'registerAttendanceview']);
Route::get('/attendance/list', [AttendanceController::class, 'index']);
Route::get('/attendance/id', [AttendanceApplyController::class, 'storeView']);
Route::get('/stamp_correction_request/list', [AttendanceApplyController::class, 'apply']);
Route::get('/admin/login', [AdminController::class, 'login']);