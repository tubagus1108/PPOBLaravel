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
            if(!CategoryLayanan::where('name',$item->brand)->where('server',$item->category)->first()){
                CategoryLayanan::create([
                    'name' => $item->brand,
                    'code' => $item->brand,
                    'type' => 'Top Up',
                    'server' => $item->category,
                ]);
            }
        }
        return "Berhasil";
    }
    // public function custom_response_product(Request $request)
    // {
    //     $custome = $this->getLayanan($request);
    //     $customearray = [];
    //     foreach($custome as $item)
    //     {
    //         $customearray[] = $item->original;
    //     }
    //     return response()->json(['success' => true,'data' => $customearray],200);
    // }
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
            $price_web = $item->price + 150;
            if($item->buyer_product_status == true)
            {
                $status  = "Normal";
            }else if($item->buyer_product_status == false)
            {
                $status = "Ganguan";
            }
            if(!LayananPulsa::where('service',$item->product_name)->first()){
                LayananPulsa::create([
                    'sid' => $item->buyer_sku_code,
                    'service' => $item->product_name,
                    'id_category' => $get_id->id,
                    'price' => $price_web,
                    'status' => $status,
                    'provider' => "DG-PULSA",
                    'type' => $item->category,
                ]);
            }
        }
        return "Berhasil";
    }
    
}
