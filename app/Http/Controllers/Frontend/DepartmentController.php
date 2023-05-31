<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Depart;


class DepartmentController extends Controller
{
    public function index(){
        $departs = Depart::all();
       return view('Frontend.Department',['departs'=>$departs]); 
    }
}
