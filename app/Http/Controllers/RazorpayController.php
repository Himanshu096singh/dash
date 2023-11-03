<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Razorpay\Api\Api;
use Session;
use Exception;

class RazorpayController extends Controller
{
    public function processRazorpayPayment($bookid)
    {
        $orderdetail = Order::where('book_id',$bookid)->first();
        // Initialize the Razorpay API with your key and secret
        $keyId = env('RAZORPAY_KEY');
        $keySecret = env('RAZORPAY_SECRET');
        $api = new Api($keyId, $keySecret);

        // Create an order and obtain the order ID
        $orderData = [
            'amount' => $orderdetail->amount * 100, // Amount in paise
            'currency' => 'USD',
        ];
        $order = $api->order->create($orderData);
        $orderdetail->razorpay_order_id = $order->id;
        $orderdetail->save();
        // You will typically pass the order ID to the Razorpay form
        return view('razorpay.payment-form', compact('order'));
    }

    public function handleRazorpayResponse(Request $request)
    {
       
        $response = $request->input('response');
 
        // Process the payment response, update the database, or perform other actions
        if (isset($response['razorpay_payment_id'])) {
            $orderdetail = Order::where('razorpay_order_id',$response['razorpay_order_id'])->first();
            $orderdetail->razorpay_payment_id = $response['razorpay_payment_id'];
            $orderdetail->razorpay_signature = $response['razorpay_signature'];
            $orderdetail->status = 1;
            $orderdetail->save();
            // Payment is successful
            $request->session()->put('response', 'success');
            return response()->json(['redirect' => route('success')]);
            return redirect()
            ->route('success')
            ->with('response','success')
            ->with('success', 'Transaction complete.');
        } else {
            // Payment failed
            $orderdetail = Order::where('razorpay_order_id',$response['razorpay_order_id'])->first();
            $orderdetail->status = 0;
            $orderdetail->save();
            $request->session()->put('response', 'error');
            return response()->json(['redirect' => route('error')]);
            return redirect()
                ->route('error')
                ->with('response','error');
        }

        return $status; // You can return the status or data as needed
    }
}
