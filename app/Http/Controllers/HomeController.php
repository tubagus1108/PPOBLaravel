<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function LandingPage()
    {
        $data = Http::get('https://api.kawalcorona.com/indonesia');
        $json = $data->json();
        $realtime_date = Carbon::now('Asia/Jakarta');
        // return $json[0]['name'];);
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
        }
        return view('landing.index',compact('json','realtime_date'));
    }
    public function IndexDev()
    {
        return view('admin.dashboard.index');
    }
    public function IndexMember()
    {
        return view('user.dashboard.index');
    }
}
