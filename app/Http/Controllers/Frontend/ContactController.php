<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Depart;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index(){
        $departs = Depart::all();
        return view('Frontend.contact',['departs'=>$departs]);
    }
     public function contact_us(Request $request)
     {

            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'subject'=>'required',
                'message'=>'required',
            ]);
             $contact = ContactUs::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'message'=>$request->message,
            ]);
            if($contact){
                return back()->with('success','Congrate! Your query has been successfully submeted');
            }
            return back()->with('error','somethig went wrong please tryagain');
     }
}
