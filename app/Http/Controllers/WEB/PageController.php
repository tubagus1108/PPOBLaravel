<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Provaider\ServiceController;
use App\Models\CategoryLayanan;
use App\Models\LayananPulsa;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\DB;
use DataTables;

class PageController extends Controller
{
    // Detail Api DigiFlazz
    private $username = 'ciruzuopz4lW';
    private $apiKey = 'dev-bc05f140-2da8-11ec-b294-4b4207c034b1';
    private $urlDigiPlazz = 'https://api.digiflazz.com/v1/';
    public function tos()
    {
        return view('halaman.tos');
    }
    public function faq()
    {
        return view('halaman.faq');
    }
    public function priceSMM()
    {
        return view('listprice.smmprice');
    }
    protected function getBrand()
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
        $brandArray = [];
        foreach($result->data as $item)
        {
            $brandArray[] = response()->json([
                'brand' => $item->brand,
            ]);
        }
        return $brandArray;
    }
    public function pricePPOB(Request $request){
        if($request->ajax()){
            $data = LayananPulsa::select('*');
            return DataTables::of($data)
            ->addIndexColumn()
            ->filter(function ($instance) use ($request) {
                if ($request->get('status') == '0' || $request->get('status') == '1') {
                    $instance->where('id_category', $request->get('status'));
                }
            })
            ->make(true);
        }
        $category = CategoryLayanan::where('deleted_at',null)->get();
        // return $category;
        
        return view('listprice.ppob-price',compact('category'));
    }
    public function contact()
    {
        return view('halaman.contact');
    }
}
