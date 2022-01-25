<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\CategoryLayanan;
use App\Models\LayananPulsa;
use App\Models\OrderPulsa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    private $username = 'ciruzuopz4lW';
    private $apiKey = 'dev-bc05f140-2da8-11ec-b294-4b4207c034b1';
    private $urlDigiPlazz = 'https://api.digiflazz.com/v1/';
    public function pulsa(Request $request)
    {
        return view('order.pulsa');
    }
    public function plnToken(Request $request)
    {
        $layanan = LayananPulsa::where('code','PLN')->get();
        return view('order.plntoken',compact('layanan'));
    }
    public function paketData()
    {
        return view('order.paketdata');
    }
    public function mobileLegends(Request $request)
    {
        $layanan = LayananPulsa::where('code','MOBILE LEGEND')->get();
        return view('order.mobile-legends',compact('layanan'));
    }
    public function orderML(Request $request)
    {
        $data = $request->validate([
            'service' => 'required',
            'id' => 'required',
            'zone' => 'required',
            'pin' => 'required',
            'price' => 'required'
        ]);
        return $data;
    }
    public function orderPLN(Request $request)
    {
        $data = $request->validate([
            'service' => 'required',
            'target' => 'required|min:4|max:13',
            'pin' => 'required',
            'price' => 'required'
        ]);
        $order_id = $this->acak_nomor(3) . $this->acak_nomor(4);
        // return $order_id;
        $signature  = md5($this->username.$this->apiKey.$order_id);
        $json = array(
            'username' => $this->username,
            'buyer_sku_code'=> $data['service'],
            'customer_no' => $data['target'],
            'ref_id' => $order_id,
            "testing"=> true,
            'sign' => $signature,
        );
        // return $json;
        $url = $this->urlDigiPlazz.'transaction';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $chresult = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($chresult,true);
        // return $result;
        if($result['data']['status'] == "Gagal")
        {
            return redirect()->back()->with('success', [
                'status' => false,
                'message' => 'Ups, '.$result['data']['message'],
            ]);
        }else{      
            $user = User::where('id',Auth::user()->id)->first();
            if (!$user) {
                return redirect()->back()->with('success', [
                    'status' => false,
                    'message' => 'Data User tidak ada'
                ]);
            }
            // return $user->pin .' '. $request->input('pin');
            if($user->pin != $request->input('pin'))
            {
                return redirect()->back()->with('success', [
                    'status' => false,
                    'message' => 'Pin Anda Salah'
                ]);
            }
            if($user->balance <= $request->input('price'))
            {
                return redirect()->back()->with('success', [
                    'status' => false,
                    'message' => 'Saldo anda tidak cukup!!'
                ]);
            }
            try {
                DB::transaction(function () use ($user,$result,$request,$order_id,$data) {
                        OrderPulsa::create([
                            'oid' => $order_id,
                            'provider_oid' => $order_id,
                            'id_user' => $user->id,
                            'service' => $data['service'],
                            'price' => $data['price'],
                            'target' =>$result['data']['customer_no'],
                            'desc' => $result['data']['message'],
                            'status' => $result['data']['status'],
                            'refund' => 0,
                        ]);
                        $buy_price = $data['price'];
                        $user->balance = $user['balance'] - $buy_price;
                        $user->save();
                });
            } catch (\Exception $e) {
                return redirect()->back()->with('success', [
                    'status' => false,
                    'message' => 'Ups, Gagal! Sistem Kami Sedang Mengalami Gangguan.'
                ]);
            }
            return redirect()->back()->with('success', [
                'status' => true,
                'message' => 'Sip, Pesanan Kamu Telah Kami Terima.'
            ]);
           
        }
    }
    public function priceML(Request $request)
    {
        $price = $request->input('price');
        $data = LayananPulsa::where('sid',$price)->first();
        return $data;
    }
    public function pricePln(Request $request)
    {
        $price = $request->input('price');
        $data = LayananPulsa::where('sid',$price)->first();
        return $data;
    }
    public function acak_nomor($length){
        $str = "";
        $karakter = array_merge(range('0','9'));
        $max_karakter = count($karakter) - 1;
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max_karakter);
            $str .= $karakter[$rand];
        }
        return $str;
    }
    public function orderPulsa(Request $request)
    {
        $message =[
            'min' => 'No hp tidak valid',
            'max' => 'Opss, sory anda memasukan no hp terlalu panjang',
        ];
        $data = $request->validate([
            'service' => 'required',
            'target' => 'required|min:4|max:13',
            'pin' => 'required',
        ]);
        $order_id = $this->acak_nomor(3) . $this->acak_nomor(4);
        // return $order_id;
        $signature  = md5($this->username.$this->apiKey.$order_id);
        $json = array(
            'username' => $this->username,
            'buyer_sku_code'=> $data['service'],
            'customer_no' => $data['target'],
            'ref_id' => $order_id,
            "testing"=> true,
            'sign' => $signature,
        );
        // return $json;
        $url = $this->urlDigiPlazz.'transaction';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $chresult = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($chresult,true);
        // return $result;
        if($result['data']['status'] == "Gagal")
        {
            return redirect()->back()->with('success', [
                'status' => false,
                'message' => 'Ups, '.$result['data']['message'],
            ]);
        }else{      
            $user = User::where('id',Auth::user()->id)->first();
            if (!$user) {
                return redirect()->back()->with('success', [
                    'status' => false,
                    'message' => 'Data User tidak ada'
                ]);
            }
            // return $user->pin .' '. $request->input('pin');
            if($user->pin != $request->input('pin'))
            {
                return redirect()->back()->with('success', [
                    'status' => false,
                    'message' => 'Pin Anda Salah'
                ]);
            }
            if($user->balance <= $request->input('price'))
            {
                return redirect()->back()->with('success', [
                    'status' => false,
                    'message' => 'Saldo anda tidak cukup!!'
                ]);
            }
            try {
                DB::transaction(function () use ($user,$result,$request,$order_id,$data) {
                        OrderPulsa::create([
                            'oid' => $order_id,
                            'provider_oid' => $order_id,
                            'id_user' => $user->id,
                            'service' => $data['service'],
                            'price' => $request->input('price'),
                            'target' =>$result['data']['customer_no'],
                            'desc' => $result['data']['message'],
                            'status' => $result['data']['status'],
                            'refund' => 0,
                        ]);
                        $buy_price = $request->input('price');
                        $user->balance = $user['balance'] - $buy_price;
                        $user->save();
                });
            } catch (\Exception $e) {
                return redirect()->back()->with('success', [
                    'status' => false,
                    'message' => 'Ups, Gagal! Sistem Kami Sedang Mengalami Gangguan.'
                ]);
            }
            return redirect()->back()->with('success', [
                'status' => true,
                'message' => 'Sip, Pesanan Kamu Telah Kami Terima.'
            ]);
           
        }
    }
}
