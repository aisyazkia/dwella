<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleBookedDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function treatment()
    {
        return $this->belongsTo(Treatment::class);
    }
}
