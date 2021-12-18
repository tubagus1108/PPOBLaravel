<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\OrderPulsa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class DigiFlazzCallbackController extends Controller
{
    public function DFStatus($x)
    {
        if($x == 'Transaksi Pending') $str = 'Pending';
        if($x == 'Transaksi Gagal') $str = 'Error';
        if($x == 'Transaksi Sukses') $str = 'Success';
        return (!$str) ? 'Pending' : $str;
    }
    public function handleOne(Request $request)
    {
        $secret = 'Satuhati1108';
        $post_data = $request->getContent();
        $signature = hash_hmac('sha1', $post_data, $secret);
        // Log::info(json_decode($request->getContent(), true));
        if ($request->header('X-Hub-Signature') == 'sha1='.$signature) {
            $array = json_decode($request->getContent(), true)['data'];
            $json = json_encode($array);
            $status = $this->DFStatus($array['message']);
            $trxid = $array['trx_id']; // ID Transaksi DigiFlazz
            $refid = $array['ref_id']; // ID Transaksi dari Panel
            $note = $array['sn'];
            $price = $array['price'];
            $messages = $array['message'];
            $last = $array['buyer_last_saldo'];
            $check_order = OrderPulsa::where('oid',$refid)->where('status','Pending')->first();
            Log::info($array);
            Log::info($check_order);
            $refund = User::where('id',$check_order->id_user)->first();
            Log::info($refund);
            if($status == "Error")
            {
                User::where('id', $check_order->id_user)->update([
                    'balance' => $refund->balance + $price,
                ]);
            }
            switch ($status) {
                case 'Success':
                    $check_order->update([
                        'desc' => $messages,
                        'status' => $status,
                        'sn' => $note,
                    ]);
                    return response()->json(['success' => true]);
    
                case 'Error':
                    $check_order->update([
                        'desc' => $messages,
                        'status' => $status,
                        'sn' => $note,
                        'refund' => 1,
                    ]);
                    return response()->json(['success' => true]);
    
                case 'Pending':
                    $check_order->update([
                        'desc' => $messages,
                        'status' => $status,
                        'sn' => $note,
                    ]);
                    return response()->json(['success' => true]);
    
                default:
                    return 'Unrecognized payment status';
            }
            
        }
        
        
    }

}
