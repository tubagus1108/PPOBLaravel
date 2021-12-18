<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DigiFlazzCallbackController extends Controller
{
    public function handleOne(Request $request)
    {
        $secret = 'Satuhati1108';
        $post_data = file_get_contents('php://input');
        $signature = hash_hmac('sha1', $post_data, $secret);
        Log::info($signature);

        if ($request->header('X-Hub-Signature') == 'sha1='.$signature) {
            Log::info(json_decode($request->getContent(), true));
            dd(json_decode($request->getContent()));
        }
    }

}
