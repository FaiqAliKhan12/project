<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Depart;
use App\Models\Doctor;
use App\Models\User;

class HomeController extends Controller
{
    public function Index(){
      $departs = Depart::all();
      $doctors = User::where('role_id',2)->get();
      return view('Frontend.index',['departs'=>$departs,'doctors'=>$doctors]);
    }

    public function book_appointment(Request $request)
    {

      if(Auth::check()){

        $appointment = Appointment::create([
          'user_id'=>auth()->user()->id,
          'app_date'=>$request->date,
          'app_time'=>$request->time,
          'depart_id'=>$request->depart,
          'doctor_id'=>$request->doctor_id,
          'pt_name'=>$request->user_name,
          'pt_phone'=>$request->phone,
          'pt_email'=>$request->email,

        ]);
        if($appointment){
          return back()->with('success','Your Appointment has been booked Successfully!');
        }
        return back()->with('error','Your Appointment process has been failed please try again');
      }
      return back()->with('error','You don,t book appointment until login');
    }
}
