<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\CategoryLayanan;
use App\Models\LayananPulsa;
use Illuminate\Http\Request;

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
        $order_id = 'test1';
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
        $result = json_decode($data);
        return $result;
    }
}
