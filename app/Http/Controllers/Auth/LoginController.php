<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('Frontend.login');
    }

    public function user_login(Request $request)
    {
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(auth()->user()->role_id == 1){
              return redirect()->route('admin.dashboard')->with('success','welcome dear admin'.auth()->user()->name);
            }
           elseif(auth()->user()->role_id == 2){
            dd('doctor login');
           }
           elseif(auth()->user()->role_id == 3){
            dd('patient login');
           }
    }
    dd('here');
}
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home')->with('success','user successfully logour');
    }
}
