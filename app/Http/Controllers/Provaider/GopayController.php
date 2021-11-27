<?php

namespace App\Http\Controllers\Provaider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GopayController extends Controller
{
    public function logingopay()
    {
        $nomerGojek = "082284395802";
        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_URL, "https://api.gojekapi.com/v3/customers/login_with_phone");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"phone":"'.$nomerGojek.'"}');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
        
        $headers = array();
        $headers[] = "X-UniqueId: 23b: ".rand(111111111111,999999999999)."b";
        $headers[] = "X-Appversion: 3.14.0";
        $headers[] = "X-Platform: Android";
        $headers[] = "X-Appid: com.gojek.app";
        $headers[] = "Accept: application/json";
        $headers[] = "X-Phonemodel: asus,ASUS_Z00AD";
        $headers[] = "X-Pushtokentype: FCM";
        $headers[] = "X-Deviceos: Android,5.0";
        $headers[] = "User-Uuid: ";
        $headers[] = "Authorization: Bearer";
        $headers[] = "Accept-Language: id-ID";
        $headers[] = "X-User-Locale: id_ID";
        $headers[] = "Content-Type: application/json; charset=UTF-8";
        $headers[] = "Host: api.gojekapi.com";
        $headers[] = "User-Agent: okhttp/3.10.0";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close ($ch);
        return $result;
        // $this->nomerGojek   =   $nomerGojek;
        // $this->loginToken   =   json_decode($result,true)['data']['login_token'];
        // return "token verifikasi : ".json_decode($result,true);
    }
    public function konfirmasiCode(){
        $nomerGojek = "082284395802";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.gojekapi.com/v3/customers/token");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, '{"scopes":"gojek:customer:transaction gojek:customer:readonly","login_token":"63ff77d4-adbb-4baa-80e4-a1ee976b9df2","client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e","grant_type":"password","client_id":"gojek:cons:android","otp":"4117"}');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
        
        $headers = array();
        $headers[] = "X-Appversion: 3.10.0";
        $headers[] = "X-Platform: Android";
        $headers[] = "X-Appid: com.gojek.app";
        $headers[] = "Accept: application/json";
        $headers[] = "X-Pushtokentype: GCM";
        $headers[] = "X-User-Locale: id_ID";
        $headers[] = "User-Uuid: ";
        $headers[] = "Accept-Language: id-ID";
        $headers[] = "Authorization: Bearer";
        $headers[] = "Content-Type: application/json; charset=UTF-8";
        $headers[] = "Host: api.gojekapi.com";
        $headers[] = "User-Agent: okhttp/3.10.0";
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close ($ch);
        return $result;
        // $akun = $nomerGojek.".txt";
        // $fopen = fopen($akun, "a");
        // fwrite($fopen, json_decode($result,true)['data']['access_token']);
        // fclose($fopen);
        // return 'token: '.json_decode($result,true)['data']['access_token'];
        
    }
}
