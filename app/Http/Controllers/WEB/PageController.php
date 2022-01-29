<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Provaider\ServiceController;
use App\Models\CategoryLayanan;
use App\Models\LayananPulsa;
use App\Models\OrderPulsa;
use Carbon\Carbon;
use GrahamCampbell\ResultType\Result;
use Illuminate\Support\Facades\DB;
use DataTables;
use Illuminate\Support\Facades\Auth;

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
        // dd($data);
        if($request->ajax()){
            $data = LayananPulsa::where('deleted_at',null)->latest();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('status', function($data){
                if($data->status == 'Normal'){
                   return '<button  class="btn btn-success">Normal</button>';
                }else{
                   return '<button  class="btn btn-danger">Ganguan</button>';
                }
           })
            ->filter(function ($instance) use ($request) {
                if($request->get('category_id'))
                {
                    $instance->where('id_category', $request->get('category_id'));
                }
                if (!empty($request->get('search'))) {
                    $instance->where(function($w) use($request){
                       $search = $request->get('search');
                       $w->orWhere('service', 'LIKE', "%$search%")
                       ->orWhere('status', 'LIKE', "%$search%");
                   });
               }
            })
            ->rawColumns(['status'])
            ->make(true);
        }
        // return $category;
        $category = CategoryLayanan::where('deleted_at',null)->get();
        
        return view('listprice.ppob-price',compact('category'));
    }
    public function contact()
    {
        return view('halaman.contact');
    }
    public function coomingSoon()
    {
        return view('dashboard.cooming-soon');
    }
    public function riwayat()
    {
        return view('order.riwayat');
    }
    public function riwayatTable()
    {
        $data = OrderPulsa::where('id_user',Auth::user()->id)->get();
        // return $data;
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('status', function($data){
            if($data->status == 'Pending'){
                return '<button  class="btn btn-success">Pending</button>';
            }else{
                return '<button  class="btn btn-success">Success</button>';
            }
        })
        ->addColumn('order-date', function($data){
            return Carbon::parse($data['created_at'])->format('F d, y');
        })
        ->rawColumns(['status'])
        ->make(true);
    }
}
