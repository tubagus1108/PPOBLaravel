<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Payment\TripayController;
use App\Http\Controllers\WEB\OrderController;
use App\Models\Deposit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DataTables;
class DepositController extends Controller
{
    public function deposit()
    {
        $tripay = new TripayController();
        $channelsQris = $tripay->getPaymentChanelsQris();
        $channelsOvo = $tripay->getPaymentChanelsOvo();
        $channelsBni= $tripay->getPaymentChanelsBni();
        $channelsBri = $tripay->getPaymentChanelsBri();
        $channelsMandiri = $tripay->getPaymentChanelsMandiri();
        return view('deposit.deposit',compact('channelsQris','channelsOvo','channelsBni','channelsBri','channelsMandiri'));
    }
    public function qris()
    {
        $tripay = new TripayController();
        $channelsQris = $tripay->getPaymentChanelsQris();
        return view('deposit.qris',compact('channelsQris'));
    }
    public function ovo()
    {
        $tripay = new TripayController();
        $channelsOvo = $tripay->getPaymentChanelsOvo();
        return view('deposit.ovo',compact('channelsOvo'));
    }
    public function vabni()
    {
        $tripay = new TripayController();
        $channelsbni = $tripay->getPaymentChanelsBni();
        return view('deposit.vabni',compact('channelsbni'));
    }
    public function qrisDataTable()
    {
        $data = Deposit::where('user_id',Auth::user()->id)->where('payment_method','QRISC')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('date', function($data){
            return Carbon::parse($data['created_at'])->format('F d, y');
        })
        ->addColumn('payment_gateway', function($data){
            $url = 'https://tripay.co.id/checkout/'.$data['reference'];
            if($data['status'] == 'PAID')
                return  '<a class="btn btn-primary" style="pointer-events: none" href="'.$url.'">PAYMENT GATEWAY</a>';
            return  '<a class="btn btn-danger" href="'.$url.'">PAYMENT GATEWAY</a>';
            // return Carbon::parse($data['created_at'])->format('F d, y');
        })
        ->addColumn('status', function($data){
            $status = $data['status'];
            if($status == 'PAID')
                return '<button class="btn btn-success p-1 text-white">'.$status.'</button>';
            return '<button class="btn btn-danger p-1 text-white">'.$status.'</button>';

        })
        ->addColumn('amount', function($data){
            $amount = number_format($data['amount']);
            return 'Rp.'.$amount;
        })
        ->addColumn('amount_received', function($data){
            $amount_received = number_format($data['amount_received']);
            return 'Rp.'.$amount_received;
        })
        ->addColumn('payment_name', function($data){
            $payment_name = $data['payment_name'];
            return $payment_name.' ( fee Rp 750 + 0,70% )';
        })
        ->rawColumns(['payment_gateway','status'])
        ->make(true);
    }
    public function ovoDataTable()
    {
        $data = Deposit::where('user_id',Auth::user()->id)->where('payment_method','OVO')->get();
        return DataTables::of($data)
        ->addIndexColumn()
        ->addColumn('date', function($data){
            return Carbon::parse($data['created_at'])->format('F d, y');
        })
        ->addColumn('payment_gateway', function($data){
            $url = 'https://tripay.co.id/checkout/'.$data['reference'];
            if($data['status'] == 'PAID')
                return  '<a class="btn btn-primary" style="pointer-events: none" href="'.$url.'">PAYMENT GATEWAY</a>';
            return  '<a class="btn btn-danger" href="'.$url.'">PAYMENT GATEWAY</a>';
            // return Carbon::parse($data['created_at'])->format('F d, y');
        })
        ->addColumn('status', function($data){
            $status = $data['status'];
            if($status == 'PAID')
                return '<button class="btn btn-success p-1 text-white">'.$status.'</button>';
            return '<button class="btn btn-danger p-1 text-white">'.$status.'</button>';

        })
        ->addColumn('amount', function($data){
            $amount = number_format($data['amount']);
            return 'Rp.'.$amount;
        })
        ->addColumn('amount_received', function($data){
            $amount_received = number_format($data['amount_received']);
            return 'Rp.'.$amount_received;
        })
        ->addColumn('payment_name', function($data){
            $payment_name = $data['payment_name'];
            return $payment_name.' ( fee Rp 750 + 0,70% )';
        })
        ->rawColumns(['payment_gateway','status'])
        ->make(true);
    }
    public function payment_vabni(Request $request)
    {
        $url = config('tripay.tripay_url_trx');
        // $message =[
        //     'required' => 'sorry you havent entered the amount',
        //     'min' => 'Minimal Rp. 10,000',
        //     'max' => 'Opss, sory anda memasukan no hp terlalu panjang',
        // ];
        $data = $request->validate([
            'jumlah' => 'required',
        ]);
        $invoice = new OrderController();
        $varrandom = $invoice->acak_nomor(3).$invoice->acak_nomor(4);
        $apiKey       = config('tripay.tripay_api_key');
        $privateKey   = config('tripay.tripay_private_key');
        $merchantCode = config('tripay.tripay_merchant');
        $merchantRef  = 'INV'.$varrandom;
        $amount       = $data['jumlah'];
        $data_user = User::where('id',Auth::user()->id)->first();
        $data = [
            'method'         => 'BNIVA',
            'merchant_ref'   => $merchantRef,
            'amount'         => $amount,
            'customer_name'  => $data_user->name,
            'customer_email' => $data_user->email,
            'order_items'    => [
                [
                    'sku'         => 'QRIS-06',
                    'name'        => 'Deposit Qris',
                    'price'       => $amount,
                    'quantity'    => 1,
                ],
            ],
            'callback_url' => route('callback'),
            'return_url'   => route('qris'),
            'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
            'signature'    => hash_hmac('sha256', $merchantCode.$merchantRef.$amount,$privateKey)
        ];
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data)
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);
        $data = json_decode($response)->data;
        // return $data;
        if(empty($error))
        {
            Deposit::create([
                'user_id' => Auth::user()->id,
                'reference' => $data->reference,
                'merchant_ref' => $data->merchant_ref,
                'payment_method' => $data->payment_method,
                'payment_name' => $data->payment_name,
                'amount' => $data->amount,
                'customer_phone' => $data->customer_phone,
                'amount_received' => $data->amount_received,
                'status' => $data->status,
            ]);
            return redirect($data->checkout_url);
        }else{
            $error;
        }
    }
    public function payment_qris(Request $request)
    {
        $url = config('tripay.tripay_url_trx');
        // $message =[
        //     'required' => 'sorry you havent entered the amount',
        //     'min' => 'Minimal Rp. 10,000',
        //     'max' => 'Opss, sory anda memasukan no hp terlalu panjang',
        // ];
        $data = $request->validate([
            'jumlah' => 'required',
        ]);
        $invoice = new OrderController();
        $varrandom = $invoice->acak_nomor(3).$invoice->acak_nomor(4);
        $apiKey       = config('tripay.tripay_api_key');
        $privateKey   = config('tripay.tripay_private_key');
        $merchantCode = config('tripay.tripay_merchant');
        $merchantRef  = 'INV'.$varrandom;
        $amount       = $data['jumlah'];
        $data_user = User::where('id',Auth::user()->id)->first();
        $data = [
            'method'         => 'QRISC',
            'merchant_ref'   => $merchantRef,
            'amount'         => $amount,
            'customer_name'  => $data_user->name,
            'customer_email' => $data_user->email,
            'order_items'    => [
                [
                    'sku'         => 'QRIS-06',
                    'name'        => 'Deposit Qris',
                    'price'       => $amount,
                    'quantity'    => 1,
                ],
            ],
            'callback_url' => route('callback'),
            'return_url'   => route('qris'),
            'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
            'signature'    => hash_hmac('sha256', $merchantCode.$merchantRef.$amount,$privateKey)
        ];
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data)
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);
        $data = json_decode($response)->data;
        // return $data;
        if(empty($error))
        {
            Deposit::create([
                'user_id' => Auth::user()->id,
                'reference' => $data->reference,
                'merchant_ref' => $data->merchant_ref,
                'payment_method' => $data->payment_method,
                'payment_name' => $data->payment_name,
                'amount' => $data->amount,
                'customer_phone' => $data->customer_phone,
                'amount_received' => $data->amount_received,
                'status' => $data->status,
            ]);
            return redirect($data->checkout_url);
        }else{
            $error;
        }
    }
    public function payment_ovo(Request $request)
    {
        $url = config('tripay.tripay_url_trx');
        $message =[
            'min' => 'Minimal Rp. 10,000',
            'max' => 'Opss, sory yang anda input tidak valid',
        ];
        $data = $request->validate([
            'pengirim' => 'required',
            'jumlah' => 'required',
        ]);
        $invoice = new OrderController();
        $varrandom = $invoice->acak_nomor(3).$invoice->acak_nomor(4);
        $apiKey       = config('tripay.tripay_api_key');
        $privateKey   = config('tripay.tripay_private_key');
        $merchantCode = config('tripay.tripay_merchant');
        $merchantRef  = 'INV'.$varrandom;
        $amount       = $data['jumlah'];
        $nomor_pengirim       = $data['pengirim'];
        $data_user = User::where('id',Auth::user()->id)->first();
        $data = [
            'method'         => 'OVO',
            'merchant_ref'   => $merchantRef,
            'amount'         => $amount,
            'customer_name'  => $data_user->name,
            'customer_email' => $data_user->email,
            'customer_phone' => $nomor_pengirim,
            'order_items'    => [
                [
                    'sku'         => 'OVO-06',
                    'name'        => 'Deposit OVO',
                    'price'       => $amount,
                    'quantity'    => 1,
                ],
            ],
            'callback_url' => route('callback'),
            'return_url'   => route('ovo'),
            'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
            'signature'    => hash_hmac('sha256', $merchantCode.$merchantRef.$amount,$privateKey)
        ];
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer '.$apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data)
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);
        $data = json_decode($response)->data;
        if(empty($error))
        {
            Deposit::create([
                'user_id' => Auth::user()->id,
                'reference' => $data->reference,
                'merchant_ref' => $data->merchant_ref,
                'payment_method' => $data->payment_method,
                'payment_name' => $data->payment_name,
                'amount' => $data->amount,
                'customer_phone' => $data->customer_phone,
                'amount_received' => $data->amount_received,
                'status' => $data->status,
            ]);
            return redirect($data->checkout_url);
        }else{
            $error;
        }
    }
}
