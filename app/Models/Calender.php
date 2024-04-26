<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'start_time',
        'finish_time',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
