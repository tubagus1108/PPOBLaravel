<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;

class TripayCallbackController extends Controller
{
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
        // dd($data);
        $merchantRef = $data->merchant_ref;
        $invoice = Deposit::where('merchant_ref', $merchantRef)
            ->where('status', 'UNPAID')
            ->first();
        dd($invoice);
        if (! $invoice) {
            return 'Invoice not found or current status is not UNPAID';
        }

        if ((int) $data->total_amount !== (int) $invoice->total_amount) {
            return 'Invalid amount';
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
