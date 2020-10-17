<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;


class authController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        // dd($request->all());
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function postregister(Request $request)
    {
        $this->validate($request,[
            'first_name'=>'required|min:3',
            'last_name'=>'required|min:3',
            'phone'=>'min:12',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]);
        
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->job_status = "customer";
        $user->save();
        
        Auth::loginUsingId($user->id);
        return redirect('/home');
    }
}
