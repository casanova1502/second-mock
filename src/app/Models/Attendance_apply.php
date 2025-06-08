<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance_apply extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'at_work', 'leaving_work', 'rest', 'total', 'detail'];
}
