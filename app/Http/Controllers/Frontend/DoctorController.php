<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Depart;

class DoctorController extends Controller
{
    public function index(){
        $departs = Depart::all();
        return view('Frontend.Doctors',['departs'=>$departs,]);
    }
}
