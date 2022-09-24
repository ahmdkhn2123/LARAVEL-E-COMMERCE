<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
class LoginUser extends Controller
{
    public function login(Request $request)
    {
        $users=User::where(['email'=>$request->email])->first();
        if(!$users||!Hash::check($request->password,$users->password))
        {
            return "UserName Or Password Not Match";
        }else{
            $request->session()->put('user',$users);
            return redirect ('/');
        }
    }


}
