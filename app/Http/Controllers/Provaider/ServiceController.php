<?php

namespace App\Http\Controllers\Provaider;

use App\Http\Controllers\Controller;
use App\Models\CategoryLayanan;
use App\Models\LayananPulsa;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Provaider\JsnGetLayanan;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    // Detail Api DigiFlazz
    private $username = 'ciruzuopz4lW';
    private $apiKey = 'dev-bc05f140-2da8-11ec-b294-4b4207c034b1';
    private $urlDigiPlazz = 'https://api.digiflazz.com/v1/';
    // Service DigiFlazz
    public function getSaldo()
    {
        $signature  = md5($this->username.$this->apiKey.'depo');
        // return $json;
        $url = $this->urlDigiPlazz.'cek-saldo';
        $json = array(
            "cmd" => 'deposit',
            "username" => $this->username,
            "sign" => $signature,
        );
        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($ch);
        curl_close($ch);
        $view_data = json_decode($data);
        if($view_data)
            return response()->json(['error' => false,'data' => $view_data]);
        return response()->json(['error' => true,'data' => $view_data]);

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
    public function getPelangganPln(Request $request)
    {
        $order_id = $this->acak_nomor(3) . $this->acak_nomor(4);
        $nomor = $request->input('nomor');
        $signature  = md5($this->username.$this->apiKey.$order_id);
        $json = array(
            'commands' => 'pln-subscribe',
            'customer_no' => $nomor,
        );
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
        return $result;
    }
    public function getLayananOp(Request $request)
    {
        $nomor = $request->input('nomor');
        $operator = new JsnGetLayanan();
        $var = $operator->getSearchNumber($nomor);
        $getLayanan = LayananPulsa::where('code',$var)->get();
        return $getLayanan;
    }
    public function getCategoryTopUp()
    {
        $signature  = md5($this->username.$this->apiKey.'pricelist');
        $json = array(
            'cmd' => 'prepaid',
            'username' => $this->username,
            'sign' => $signature,
        );
        $url = $this->urlDigiPlazz.'price-list';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($data);
        foreach($result->data as $item)
        {
            if($item->category !== 'Data')
            {
                if(!CategoryLayanan::where('name',$item->brand)->where('server',$item->category)->first()){
                    CategoryLayanan::create([
                        'name' => $item->brand,
                        'code' => $item->brand,
                        'type' => 'Top Up',
                        'server' => $item->category,
                    ]);
                }
            }
        }
        return "Berhasil";
    }
    public function addLayanan()
    {
        $signature  = md5($this->username.$this->apiKey.'pricelist');
        $json = array(
            'cmd' => 'prepaid',
            'username' => $this->username,
            'sign' => $signature,
        );
        $url = $this->urlDigiPlazz.'price-list';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($json));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($ch);
        curl_close($ch);
        $result = json_decode($data);
        // return $result;
        foreach($result->data as $item)
        {
            $get_id = CategoryLayanan::where('name',$item->brand)->first();
            // return $get_id->id;
            $price_web = $item->price + 200;
            if($item->buyer_product_status == true)
            {
                $status  = "Normal";
            }else if($item->buyer_product_status == false)
            {
                $status = "Ganguan";
            }
            // if($item->category !== 'Data'){
            //     if(!LayananPulsa::where('service',$item->product_name)->first()){
            //         LayananPulsa::create([
            //             'sid' => $item->buyer_sku_code,
            //             'service' => $item->product_name,
            //             'id_category' => $get_id->id,
            //             'code' => $item->brand,
            //             'price' => $price_web,
            //             'status' => $status,
            //             'provider' => "DG-PULSA",
            //             'desc' => $item->desc,
            //             'type' => $item->category,
            //         ]);
            //     }
            // }
            if(!LayananPulsa::where('service',$item->product_name)->first()){
                LayananPulsa::create([
                    'sid' => $item->buyer_sku_code,
                    'service' => $item->product_name,
                    'id_category' => $get_id->id,
                    'code' => $item->brand,
                    'price' => $price_web,
                    'status' => $status,
                    'provider' => "DG-PULSA",
                    'desc' => $item->desc,
                    'type' => $item->category,
                ]);
            }
        }
        return "Berhasil";
    }
}
