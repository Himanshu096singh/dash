<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Order;
use App\Models\Orderworkshop;

class PayPalController extends Controller
{
    public function payment(Request $request)
    {
        // return $request;
        $orderdetail = Order::where('book_id',$request->ordid)->first();
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('success.payment'),
                "cancel_url" => route('error.payment'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $orderdetail['amount']
                    ]
                ]
            ]
        ]);
        if (isset($response['id']) && $response['id'] != null) {
            $orderdetail->payment_token_id = $response['id'];
            $orderdetail->save();
            // $response['id'];
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            
            return redirect()
            ->route('error')
            ->with('error', 'Something went wrong.');
            
        } else {
            return redirect()
                ->route('error')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }


    }
    public function paymentCancel()
    {
        $tokenId = $response['id'];
        $orderdetail = Order::where('payment_token_id',$tokenId)->first();
        $orderdetail->status = 0;
        $orderdetail->save();
        return redirect()
                ->route('error')
                ->with('response','error');
    }
    public function paymentSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        $tokenId = $response['id'];
        $orderdetail = Order::where('payment_token_id',$tokenId)->first();
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $orderdetail->payer_id = $response['payer']['payer_id'];
            $orderdetail->status = 1;
            $orderdetail->save();
            return redirect()
                ->route('success')
                ->with('response','success')
                ->with('success', 'Transaction complete.');
        } else {
            $orderdetail->status = 0;
            $orderdetail->save();
            return redirect()
                ->route('error')
                ->with('response','error');
        }
    }


    public function workshoppayment(Request $request)
    {
        // return $request;
        $orderdetail = Orderworkshop::where('invoice',$request->ordid)->first();
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();
        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('success.workshoppayment'),
                "cancel_url" => route('error.workshoppayment'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $orderdetail['amount']
                    ]
                ]
            ]
        ]);
        if (isset($response['id']) && $response['id'] != null) {
            $orderdetail->payment_token_id = $response['id'];
            $orderdetail->save();
            // $response['id'];
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            
            return redirect()
            ->route('error')
            ->with('error', 'Something went wrong.');
            
        } else {
            return redirect()
                ->route('error')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }


    }
    public function workshoppaymentCancel()
    {
        $tokenId = $response['id'];
        $orderdetail = Orderworkshop::where('payment_token_id',$tokenId)->first();
        $orderdetail->status = 0;
        $orderdetail->save();
        return redirect()
                ->route('error')
                ->with('response','error');
    }
    public function workshoppaymentSuccess(Request $request)
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);
        $tokenId = $response['id'];
        $orderdetail = Orderworkshop
        ::where('payment_token_id',$tokenId)->first();
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $orderdetail->payer_id = $response['payer']['payer_id'];
            $orderdetail->status = 1;
            $orderdetail->save();
            return redirect()
                ->route('success')
                ->with('response','success')
                ->with('success', 'Transaction complete.');
        } else {
            $orderdetail->status = 0;
            $orderdetail->save();
            return redirect()
                ->route('error')
                ->with('response','error');
        }
    }

}