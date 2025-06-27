<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'at_work',
        'leaving_work',
        'total',
        'start_rest',
        'finish_rest',
        'rest',
        'detail'
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }
}
