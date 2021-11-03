<?php

namespace App\Http\Controllers\Provaider;

use App\Http\Controllers\Controller;
use App\Models\CategoryLayanan;
use App\Models\LayananPulsa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
    public function GetCategory()
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
        $categoryArray = [];
        foreach($result->data as $item)
        {
            $categoryArray[] = $item->category;
            $categoryArray[] = $item->brand;
            $check_category = CategoryLayanan::where('name',$item->brand)->where('server',$item->category)->first();
            if($check_category)
            {
                return response()->json(['message' => 'Berhasil Masukkan Data']);
            }
            else{
                CategoryLayanan::create([
                    'name' => $item->brand,
                    'code' => $item->brand,
                    'type' => 'Top Up',
                    'server' => $item->category,
                ]);
            }
        }
        return $categoryArray;
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
        $layanan = [];
        foreach($result->data as $item)
        {
            if($item->buyer_product_status == true)
            {
                $status  = "Normal";
            }else if($item->buyer_product_status == false)
            {
                $status = "Ganguan";
            }
            $price_web = $item->price + 150;
            $price_api = $item->price + 100;
            LayananPulsa::create([
                'service_id' => $item->buyer_sku_code,
                'provider_id' => $item->buyer_sku_code,
                'operator' => $item->brand,
                'layanan' => $item->product_name,
                'deskripsi' => $item->desc,
                'harga' => $price_web,
                'harga_api' => $price_api,
                'status' => $status,
                'type' => $item->category,
                'server' => 'Top Up',
            ]);
        }
        return $layanan;
    }
}
