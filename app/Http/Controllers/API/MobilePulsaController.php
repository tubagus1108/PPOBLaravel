<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MobilePulsaController extends Controller
{
    private $username = "085760716816";
    private $api_key = "3815bab21c2ea839";

    public function checkBelance()
    {
        $username   = $this->username;
        $apiKey   = $this->api_key;
        $signature  = md5($username.$apiKey.'bl');
        // return $json;
        $url = "https://testprepaid.mobilepulsa.net/v1/legacy/index";

        $ch  = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{
            "commands" : "balance",
            "username" : "085760716816",
            "sign"     : "cde6aec3f75ef1d662c0dcb409da8617"
        }');
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $data = curl_exec($ch);
        curl_close($ch);
        return json_decode($data);
    }

}
