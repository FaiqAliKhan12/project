<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Depart;

class ContactController extends Controller
{
    public function Index(){
        $departs = Depart::all();
        return view('Frontend.contact',['departs'=>$departs]);
    }
}
