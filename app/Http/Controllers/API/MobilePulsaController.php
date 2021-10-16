<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MobilePulsaController extends Controller
{
    private function Authbalance()
    {
        return '{
            "commands": "balance",
            "username": "085760716816",
            "sign": "cde6aec3f75ef1d662c0dcb409da8617"
        }';
    }
    private function AuthPriceList()
    {
        return '{
            "commands" : "pricelist",
            "username" : "085760716816",
            "sign"     : "52ae3f052c842ded14b62bb850b39aff",
            "status"   : "all"
        }';
    }

    public function checkBelance()
    {
        $json = $this->Authbalance();
        $getBalance = Http::post('https://prepaid.iak.dev/v1/legacy/index', ['body' => $this->Authbalance()]);
        // dd($getBalance);
        $json_view = $getBalance->json();
        return $json_view;


    }

}
