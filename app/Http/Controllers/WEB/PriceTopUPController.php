<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\LayananPulsa;
use Illuminate\Http\Request;
use DataTables;
class PriceTopUPController extends Controller
{
    public function index()
    {
        $data = LayananPulsa::where('deleted_at',null)->get();
        return view('user.price.index',compact('data'));
    }
    public function priceDatatable()
    {
        $data = LayananPulsa::where('deleted_at',null)->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->make(true);
    }
}
