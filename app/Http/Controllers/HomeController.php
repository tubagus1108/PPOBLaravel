<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\OrderPulsa;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function LandingPage()
    {
        // $data = Http::get('https://api.kawalcorona.com/indonesia');
        // $json = $data->json();
        // $realtime_date = Carbon::now('Asia/Jakarta');
        // return $json[0]['name'];);
        if(Auth::check())
        {
            
            return redirect()->route('dashboard');
            // if(Auth()->user()->level == 'Developers')
            // {
            //     return redirect()->route('home-developers');
            // }
            // else{
            //     return redirect()->route(
            //         'home-member'
            //     );
            // }
        }
        return view('landing.index');
    }
    public function dashboard()
    {
        $order_buy = OrderPulsa::where('id_user',Auth::user()->id)->count();
        $count_depo = DB::table('deposit')->where('user_id',Auth::user()->id)->sum('deposit.amount_received');
        $count_order = DB::table('order_pulsa')->where('id_user',Auth::user()->id)->sum('order_pulsa.price');
        return view('dashboard.index',compact('order_buy','count_depo','count_order'));
    }
}
