<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class RegisterController extends Controller
{
    public function store_user(Request $request)
    {
        $this->validate($request, [
            'password' => 'min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);
       $user = User::create([
        'role_id'=>3,
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'password'=>bcrypt($request->password),
       ]);
       if($user){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           if(auth()->user()->role_id == 3){
            
           }
        }
       return redirect()->route('home')->with('success', 'Congrate! your successfuly registered');
       }
       return redirect()->route('home')->with('error', 'Something went wrong please try again');
    }
}
