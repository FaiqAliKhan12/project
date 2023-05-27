<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        dd('successfully register');
       }
    }
}
