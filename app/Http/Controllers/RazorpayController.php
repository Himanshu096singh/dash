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
            'currency' => 'INR',
        ];
        $order = $api->order->create($orderData);

        // You will typically pass the order ID to the Razorpay form
        return view('razorpay.payment-form', compact('order'));
    }

    public function handleRazorpayResponse(Request $request)
    {
        return $response = $request->input('response');

        // Process the payment response, update the database, or perform other actions
        if (isset($response['razorpay_payment_id'])) {
            // Payment is successful
            $status = 'Payment successful! Payment ID: ' . $response['razorpay_payment_id'];
        } else {
            // Payment failed
            $status = 'Payment failed!';
        }

        return $status; // You can return the status or data as needed
    }
}
