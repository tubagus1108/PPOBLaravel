<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TripayController extends Controller
{
    // private $url = 'https://tripay.co.id/api-sandbox/merchant/payment-channel?';
    private $url = '	https://tripay.co.id/api/merchant/payment-channel?';
    public function getPaymentChanelsQris()
    {
        $apiKey = config('tripay.tripay_api_key');
        $url = config('tripay.tripay_url');
        $payload = ['code' => 'QRIS'];
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_FRESH_CONNECT  => true,
        CURLOPT_URL            => $this->url.http_build_query($payload),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
        CURLOPT_FAILONERROR    => false
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response)->data;
        return $response ? $response : $error;
        // echo empty($error) ? $response : $error;
    }
    public function getPaymentChanelsOvo()
    {
        $apiKey = config('tripay.tripay_api_key');
        $url = config('tripay.tripay_url');
        $payload = ['code' => 'OVO'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_FRESH_CONNECT  => true,
        CURLOPT_URL            => $this->url.http_build_query($payload),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
        CURLOPT_FAILONERROR    => false
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response)->data;
        return $response ? $response : $error;
        // echo empty($error) ? $response : $error;
    }
    public function getPaymentChanelsBni()
    {
        $apiKey = config('tripay.tripay_api_key');
        $url = config('tripay.tripay_url');
        $payload = ['code' => 'BNIVA'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_FRESH_CONNECT  => true,
        CURLOPT_URL            => $this->url.http_build_query($payload),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
        CURLOPT_FAILONERROR    => false
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response)->data;
        return $response ? $response : $error;
        // echo empty($error) ? $response : $error;
    }
    public function getPaymentChanelsBri()
    {
        $apiKey = config('tripay.tripay_api_key');
        $url = config('tripay.tripay_url');
        $payload = ['code' => 'BRIVA'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_FRESH_CONNECT  => true,
        CURLOPT_URL            => $this->url.http_build_query($payload),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
        CURLOPT_FAILONERROR    => false
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response)->data;
        return $response ? $response : $error;
        // echo empty($error) ? $response : $error;
    }
    public function getPaymentChanelsMandiri()
    {
        $apiKey = config('tripay.tripay_api_key');
        $url = config('tripay.tripay_url');
        $payload = ['code' => 'MANDIRIVA'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_FRESH_CONNECT  => true,
        CURLOPT_URL            => $this->url.http_build_query($payload),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HEADER         => false,
        CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
        CURLOPT_FAILONERROR    => false
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);
        $response = json_decode($response)->data;
        return $response ? $response : $error;
        // echo empty($error) ? $response : $error;
    }
}
