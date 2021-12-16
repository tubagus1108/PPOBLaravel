<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\CategoryLayanan;
use App\Models\LayananPulsa;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pulsa(Request $request)
    {
        if($request->ajax()){
            return "dd";
        }
        $category = CategoryLayanan::where('deleted_at',null)->get();
        return view('order.pulsa',compact('category'));
    }
    public function requestOperator(Request $request)
    {
        $varTsel = ["0822","0853","0811","0812","0813","0821","0852","0823","0851"];
        if($varTsel)
        {
            $inputTsel = 'TELKOMSEL';
        }
        $data = LayananPulsa::where('operator',$inputTsel)->get();
        return $data;
    }
}
