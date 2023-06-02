<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Depart;
use App\Models\ContactUs;
use App\Models\Appointment;


class DoctorController extends Controller
{
    public function index(){
        $departs = Depart::all();
        return view('Frontend.Doctors',['departs'=>$departs,]);
    }


    public function doctor_profile($id)
    {
        $user = User::find($id);
        return view('Backend.Adminlayout.profile',['user'=>$user]);
    }

    public function update_profile(Request  $request,$id)
    {

        if($request->image){
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                User::where('id',$id)->update([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'address'=>$request->address,
                    'password'=>bcrypt($request->password),
                     'image'=>$imageName,
                ]);
                return redirect()->route('admin.dashboard');
            }
            User::where('id',$id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'password'=>bcrypt($request->password),
            ]);
            return redirect()->route('admin.dashboard');
    }


    public function patient_list()
    {
        $patients = User::where('role_id',3)->get();
        return view('Backend.doctor.patient',['patients'=>$patients]);
    }

    public function appointment()
    {
        $appointments = Appointment::where('doctor_id',auth()->user()->id)->with('getDepart','getDoctor')->get();
        return view('Backend.doctor.appointment',['appointments'=>$appointments]);
    }

}
