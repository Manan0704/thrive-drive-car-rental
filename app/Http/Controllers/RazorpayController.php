<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Razorpay\Api\Api;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class RazorpayController extends Controller
{
    //

    public function index() {
        return view('razorpay');
    }

    public function payment(Request $request) {
        $amount = $request->input('amount');
       
        $api = new Api(env('RAZORPAY_KEY'),env('RAZORPAY_SECRET'));
        $orderData = [
            'receipt' => 'order_'.rand(1000,9999),
            'amount' => $amount * 100,
            'currency' => 'INR',
            'payment_capture' => 1
        ];
        $order = $api->order->create($orderData);
        //echo $order['id'];
        return view('payment',['orderId'=>$order['id'], 'amount'=>$amount * 100]);
    }

    // public function store(Request $request)
    // {
    //     $amount = $request->amount * 100; // Convert to paise

    //     $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

    //     $razorpayOrder = $api->order->create([
    //         'receipt' => 'RCPT-' . uniqid(),
    //         'amount' => $amount,
    //         'currency' => 'INR'
    //     ]);

    //     // Save order to DB
    //     $order = new Order();
    //     $order->user_id = Auth::id();
    //     $order->razorpay_order_id = $razorpayOrder['id'];
    //     $order->amount = $request->amount;
    //     $order->status = 'pending';
    //     $order->save();

    //     return response()->json([
    //         'order_id' => $razorpayOrder['id']
    //     ]);
    // }


}
