<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'depart_id',
        'doctor_name',
        'email',
        'phone',
        'password',
        'address',
        'image',
    ];
}
