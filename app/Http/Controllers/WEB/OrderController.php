<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\LayananPulsa;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pulsa_reguler(Request $request)
    {
        return view('user.pemesanan.pulsa');
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
