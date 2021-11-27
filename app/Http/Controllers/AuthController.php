<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    public function forgotpassword()
    {
        return view('auth.forgot-password');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function indexLogin()
    {
        // if(Auth::check())
        // {
        //     if(Auth()->user()->level == 'Developers')
        //     {
        //         return redirect()->route('home-developers');
        //     }
        //     else{
        //         return redirect()->route(
        //             'home-member'
        //         );
        //     }
        // }
        return view('auth.login');
    }
    public function Login(Request $request)
    {
        if(!$request->all())
        {
            return view('login');
        }
        else{
            $data = [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ];
            Auth::attempt($data);
            if(Auth::check())
            {
                if(Auth()->user()->level == 'Developers')
                {
                    return redirect()->route('home-developers');
                }
                else{
                    return redirect()->route(
                        'home-member'
                    );
                }
            }else{
                return redirect(route('login'))->with('failed' , 'Username Dan Password Salah' );
            }
        }
    }
    public function Logout (){
        Session::flush();
        return redirect(route('landing'));
    }
}
