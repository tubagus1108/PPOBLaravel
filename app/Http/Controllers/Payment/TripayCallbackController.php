<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use App\Models\User;
use Illuminate\Http\Request;

class TripayCallbackController extends Controller
{
    // protected $privateKey = 'merE4-bVTAK-AlD5t-KpMwX-a7UXj';
    protected $privateKey = '1BYtH-rEIIm-SmrLA-nPsFP-vvdrR';

    public function handle(Request $request)
    {
        $callbackSignature = $request->server('HTTP_X_CALLBACK_SIGNATURE');
        $json = $request->getContent();
        $signature = hash_hmac('sha256', $json, $this->privateKey);

        if ($signature !== (string) $callbackSignature) {
            return 'Invalid signature';
        }

        if ('payment_status' !== (string) $request->server('HTTP_X_CALLBACK_EVENT')) {
            return 'Invalid callback event, no action was taken';
        }

        $data = json_decode($json);
        $merchantRef = $data->merchant_ref;
        $invoice = Deposit::where('merchant_ref', $merchantRef)
            ->where('status', 'UNPAID')
            ->first();
        if (! $invoice) {
            return 'Invoice not found or current status is not UNPAID';
        }
        $user = User::where('id', $invoice->user_id)
            ->first();
        if (! $user) {
            return 'User not found';
        }
        if ((int) $data->total_amount !== (int) $invoice->amount) {
            return 'Invalid amount';
        }
        if($data->status == 'PAID')
        {
            User::where('id', $invoice->user_id)->update([
                'balance' => $user->balance + $invoice->amount_received,
            ]);
        }
        switch ($data->status) {
            case 'PAID':
                $invoice->update(['status' => 'PAID']);
                return response()->json(['success' => true]);

            case 'EXPIRED':
                $invoice->update(['status' => 'EXPIRED']);
                return response()->json(['success' => true]);

            case 'FAILED':
                $invoice->update(['status' => 'FAILED']);
                return response()->json(['success' => true]);

            default:
                return 'Unrecognized payment status';
        }
    }
}
