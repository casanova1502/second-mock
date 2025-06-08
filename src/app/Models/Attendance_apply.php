<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance_apply extends Model
{
    use HasFactory;

    protected $fillable = ['attendance_id', 'date', 'at_work', 'leaving_work', 'rest', 'total', 'detail'];

    public function attendance()
    {
       return $this->belongsTo(Attendance::class);
    }
}
