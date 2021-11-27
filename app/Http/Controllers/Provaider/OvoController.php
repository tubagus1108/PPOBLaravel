<?php

namespace App\Http\Controllers\Provaider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OvoController extends Controller
{
    public function getDevice()
    {
        $deviceId = rand(111,999).'ff'.rand(111,999).'-b7fc-3b'.rand(11,99).'-b'.rand(11,99).'d-'.rand(1111,9999).'d2fea8e5';
        return $deviceId;
    }

    public function sendRequest2FA()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.ovo.id/v1.1/api/auth/customer/login2FA");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"deviceId":"'.$this->getDevice().'","mobile":"085760716816"}');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'App-Version: 3.48.0',
            'Os: Android',
            'Content-Type: application/json; charset=UTF-8',
            'Host: api.ovo.id',
            'User-Agent: okhttp/3.11.0',
        ]);
        $result = curl_exec($ch);
        $reshttp = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        return $result;
        // return ($reshttp == 200) ? true : false;
    }
}
