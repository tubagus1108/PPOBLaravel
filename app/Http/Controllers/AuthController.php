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
        if(Auth::check())
        {
            return redirect()->route('dashboard');
        }
        return view('auth.login');
    }
    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);
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
                return redirect()->route('dashboard')->withSuccessMessage('login success');
            }else{
                return redirect(route('login'))->with('failed' , 'Username Dan Password Salah' );
            }
        }
    }
    public function Logout (){
        Session::flush();
        return redirect(url('auth/login'));
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
