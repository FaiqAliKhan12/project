<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Depart;
use App\Models\ContactUs;
use App\Models\Appointment;


class AdminController extends Controller
{
    public function index()
    {
        return view('Backend.index');
    }
    public function create()
    {
        $departs = Depart::all();
        return view('Backend.doctor.create',['departs'=>$departs]);
    }

    public function store(Request $request )
    {
        // dd($request->all());
        if($request->image){
         $imageName = time().'.'.$request->image->extension();
         $request->image->move(public_path('images'), $imageName);

         $doctor= User::create([
            'role_id'=>2,
            'depart_id'=>$request->depart_id,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),
            'image'=>$imageName,
        ]);
        if($doctor){
            return redirect()->route('admin.list.doctor')->with('success','Congrate! Your are successfully Add new doctor');
        }
        return back()->with('error','somethig went wrong please try again');
    }
        }

        public function listing()
        {
           $doctors =  User::where('role_id',2)->with('getDepart')->get();
            // dd($doctors);
            return view('Backend.doctor.list',['doctors'=>$doctors]);
        }

        public function destroy($id)
        {
            User::where('id',$id)->delete();
            return back();
        }
        public function edit($id)
        {
           $doctor = User::where('id',$id)->with('getDepart')->first();
        //    dd($doctor->getDepart  );
           $departs = Depart::all();
            return view('Backend.doctor.update',['doctor'=>$doctor,'departs'=>$departs]);
        }

        public function update(Request $request)
        {

            if($request->image){
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                User::where('id',$request->id)->update([
                    'role_id'=>2,
                    'depart_id'=>$request->depart_id,
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'address'=>$request->address,
                    'password'=>bcrypt($request->password),
                     'image'=>$imageName,
                ]);
                return redirect()->route('admin.list.doctor');
            }
            User::where('id',$request->id)->update([
                'role_id'=>2,
                'depart_id'=>$request->depart_id,
                'name'=>$request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'password'=>bcrypt($request->password),
            ]);
            return redirect()->route('admin.list.doctor');
        }

    public function patient_list()
    {
        $patients = User::where('role_id',3)->get();
        return view('Backend.patient.list',['patients'=>$patients]);
    }

    public function patient_edit($id)
    {
        $patient = User::where('id',$id)->first();
        return view('Backend.patient.edit',['patient'=>$patient]);
    }

    public function patient_update(Request $request)
    {
        User::where('id',$request->id)->update([

            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'password'=>bcrypt($request->password),
        ]);
        return redirect()->route('admin.list.patient');
    }

    public function depart_create()
    {
        return view('Backend.depart.create');
    }

     public function store_depart(Request $request )
     {
         $request->validate(['depart'=>'required','description'=>'required']);
         $depart = Depart::create(['depart'=>$request->depart,'description'=>$request->description]);
         if($depart) return redirect()->route('admin.list.depart');
     }


    public function depart_list()
    {
        $departs = Depart::all();
        return view('Backend.depart.list',['departs'=>$departs]);
    }

        public function depart_edit($id)
        {
            $depart = Depart::find($id);
            return view('Backend.depart.edit',['depart'=>$depart]);
        }

        public function depart_update(Request $request,$id)
        {
            $request->validate(['depart'=>'required','description'=>'required']);
            $depart = Depart::where('id',$id)->update(['depart'=>$request->depart,'description'=>$request->description]);
            if($depart) return redirect()->route('admin.list.depart');
        }

        public function depart_destroy($id)
        {
            Depart::where('id',$id)->delete();
            return back();
        }

    public function contact_list()
    {
        $contactUs = ContactUs::all();
        return view('Backend.contact.list',['contactUs'=>$contactUs]);
    }
    public function contact_delete($id)
    {
         ContactUs::where('id',$id)->delete();
         return back();

    }

    public function admin_profile($id)
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
    public function appointment()
    {
        $appointments = Appointment::with('getDepart','getDoctor')->get();
        return view('Backend.Adminlayout.appointment',['appointments'=>$appointments]);
    }

}
