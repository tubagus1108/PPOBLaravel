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
    public function getSearchNumber(Request $request,$number,$kode = 0)
    {
        if($kode == 0){$request->kode = 'Operator';}
		elseif($kode != 0){$request->kode = $kode;}
		$number = $this->getOperator($request->number);
		$data = $this->getJson();
	 	$values = '';
		foreach ($data[$request->kode] as $key => $value) {
		    $items = (string)array_search($number , $data[$request->kode][$key]);
			if($items != null){
				$values = $key;
				break;
			}
		}

		return $values;
    }
    protected function getOperator($number)
    {
        $pecah = str_split($number);
        if($pecah[0] == '6' && $pecah[1] == '2'){
            $number = '08'.$pecah[3].$pecah[4];
        }else if($pecah[0] == '+' && $pecah[1] == '6' && $pecah[2]== '2'){
            $number = '08'.$pecah[4].$pecah[5];
        }else if($pecah[0] == '0' && $pecah[1] == '8'){
            $number = substr($number,0,4);
        }else{
            return false;
        }
        return $number;
    }
    public function getJson()
    {
        $urljsn = Storage::disk('local')->get('jsn.json');
        $data = json_decode($urljsn);
        return $data;
    }
    public function getLayanan(Request $request)
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
        // return $data;
        $result = json_decode($data);
        $categoryArray = [];
        foreach($result->data as $item)
        {
            if($item->brand == "TELKOMSEL")
            {
                $categoryArray[] = response()->json([
                    'product_name' => $item->product_name,
                    'brand' => $item->brand,
                    'category' => $item->category,
                    'price' => $item->price + 500,
                    'code' => $item->buyer_sku_code,
                    'description' => $item->desc,
                ]);
            }
        }
        return $categoryArray;
        
    }
    public function custom_response_product(Request $request)
    {
        $custome = $this->getLayanan($request);
        $customearray = [];
        foreach($custome as $item)
        {
            $customearray[] = $item->original;
        }
        return response()->json(['success' => true,'data' => $customearray],200);
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
    public function wa(Request $request)
    {

        $data_fields = array(
            "from" => array(
                "phone_number" => "+628116028665"
            ),
            "provider" => "whatsapp",
            "to" => [
                array(
                    "phone_number" => $request->to
                ),
            ],
            "data" => array(
                "message_template" => array(
                    "storage"=> "conversation",
                    "template_name"=> "refund_id",
                    "namespace"=> "c11df0f4_aa8b_43db_8e09_e831baab8f83",
                    "language"=> array(
                        "policy"=> "deterministic",
                        "code"=> "id"
                    ),
                    "template_data"=> [
                        array(
                            "data"=> $request->data1
                        ),
                        array(
                            "data"=> $request->data2
                        )
                    ]
                ),
            )
        );
        return $data_fields;
        // $token = 'eyJraWQiOiJjdXN0b20tb2F1dGgta2V5aWQiLCJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJhdWQiOiJmcmVzaGNoYXQiLCJzdWIiOiIyZTY2YmYxZC1iNTVlLTRiYmYtYTBiZC0yYzYzMTBkZjlhOTgiLCJjbGllbnRJZCI6ImZjLWYyN2JkM2U5LTA5ZTAtNDZiMC1hOTFlLTFmNzhkODMyYzhjNiIsInNjb3BlIjoiYWdlbnQ6cmVhZCBhZ2VudDpjcmVhdGUgYWdlbnQ6dXBkYXRlIGFnZW50OmRlbGV0ZSBjb252ZXJzYXRpb246Y3JlYXRlIGNvbnZlcnNhdGlvbjpyZWFkIGNvbnZlcnNhdGlvbjp1cGRhdGUgbWVzc2FnZTpjcmVhdGUgbWVzc2FnZTpnZXQgYmlsbGluZzp1cGRhdGUgcmVwb3J0czpmZXRjaCByZXBvcnRzOmV4dHJhY3QgcmVwb3J0czpyZWFkIHJlcG9ydHM6ZXh0cmFjdDpyZWFkIGRhc2hib2FyZDpyZWFkIHVzZXI6cmVhZCB1c2VyOmNyZWF0ZSB1c2VyOnVwZGF0ZSB1c2VyOmRlbGV0ZSBvdXRib3VuZG1lc3NhZ2U6c2VuZCBvdXRib3VuZG1lc3NhZ2U6Z2V0IG1lc3NhZ2luZy1jaGFubmVsczptZXNzYWdlOnNlbmQgbWVzc2FnaW5nLWNoYW5uZWxzOm1lc3NhZ2U6Z2V0IG1lc3NhZ2luZy1jaGFubmVsczp0ZW1wbGF0ZTpjcmVhdGUgbWVzc2FnaW5nLWNoYW5uZWxzOnRlbXBsYXRlOmdldCBmaWx0ZXJpbmJveDpyZWFkIGZpbHRlcmluYm94OmNvdW50OnJlYWQgcm9sZTpyZWFkIGltYWdlOnVwbG9hZCIsImlzcyI6ImZyZXNoY2hhdCIsInR5cCI6IkJlYXJlciIsImV4cCI6MTk1MjIyMDY0NSwiaWF0IjoxNjM2Njg3ODQ1LCJqdGkiOiJiNTAzYWYxYS1iYjNiLTRiYmUtYWIxZi0zZWMwMDViZmFjYjMifQ.XlNCqy7-QyH7s1M5mzLRCX3lrISw8iDVhoxBymgNAF4';
        // $header =  array(
        //     "Accept: application/json",
        //     "Authorization: Bearer $token",
        //     'Content-Type: application/json',
        // );
        // $url = "https://api.freshchat.com/v2/outbound-messages/whatsapp";
        // // $url = "https://api.freshchat.com/v2/channels";
        // $curl = curl_init($url);
        // curl_setopt($curl, CURLOPT_POST,true);
        // curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        // curl_setopt($curl, CURLOPT_HEADER, true);
        // curl_setopt($curl, CURLOPT_POSTFIELDS, '{
        //     "from": {
        //         "phone_number": "+628116028665"
        //     },
        //     "provider": "whatsapp",
        //     "to": [
        //         {
        //             "phone_number": "+628887366966"
        //         },
        //         {
        //             "phone_number": "+6285760716816"
        //         }
        //     ],
        //     "data": {
        //         "message_template": {
        //             "storage": "conversation",
        //             "template_name": "refund_id",
        //             "namespace": "c11df0f4_aa8b_43db_8e09_e831baab8f83",
        //             "language": {
        //                 "policy": "deterministic",
        //                 "code": "id"
        //             },
        //             "template_data": [
        //                 {
        //                     "data": "Bagus"
        //                 },
        //                 {
        //                     "data": "hello"
        //                 }
        //             ]
        //         }
        //     }
        // }');
        // $output = curl_exec($curl);
        // return $output;
    }
}
