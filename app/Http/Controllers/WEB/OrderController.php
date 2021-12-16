<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\CategoryLayanan;
use App\Models\LayananPulsa;
use App\Models\OrderPulsa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    private $username = 'ciruzuopz4lW';
    private $apiKey = 'dev-bc05f140-2da8-11ec-b294-4b4207c034b1';
    private $urlDigiPlazz = 'https://api.digiflazz.com/v1/';
    public function pulsa(Request $request)
    {
        return view('order.pulsa');
    }
    public function orderPulsa(Request $request)
    {
        $order_id = '13';
        $signature  = md5($this->username.$this->apiKey.$order_id);
        $json = array(
            'username' => $this->username,
            'buyer_sku_code'=> $request->input('service'),
            'customer_no' => $request->input('target'),
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

        $data = curl_exec($ch);
        curl_close($ch);
        $result = json_encode(json_decode($data));
        if($result['data']['status'] == "Gagal")
        {
            return redirect()->route('pulsa');
        }else{
            $insert = OrderPulsa::create([
                'oid' => rand(),
                'provider_oid' => rand(),
                'id_user' => Auth::user()->id,
                'service' => $request->input('service'),
                'price  ' => $result['data']['price'],
                'target  ' =>$result['data']['customer_no'],
                'desc  ' => $result['data']['message'],
                'status  ' => $result['data']['status'],
                'refund  ' => 0,
            ]);
            if($insert)
            {
                return redirect()->route('pulsa');
            }
        }
        
    }
}
