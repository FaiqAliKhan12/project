<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Depart;

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

}
