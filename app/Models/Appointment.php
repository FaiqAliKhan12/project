<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'app_date',
        'app_time',
        'depart_id',
        'doctor_id',
        'pt_name',
        'pt_phone',
        'pt_email',
    ];

    
}
