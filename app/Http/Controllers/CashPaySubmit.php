<?php

namespace App\Http\Controllers;

use App\Models\CashPaymentSubmit;
use App\Models\OnlinePaymentSubmit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CashPaySubmit extends Controller
{
    public function onlinePayment (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tnumber' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        OnlinePaymentSubmit::OnlinenewPayment($request);


//        $data = [
//            'name' => $request->name,
//            'email' => $request->email,
//            'phone' => $request->phone,
//            'tnumber' => $request->tnumber,
//            'address' => $request->address,
//        ];

//
//
//        Mail::send('front.email.email-sender-payment-online', $data, function($message) use ($data) {
//            $message->to($data['email'])
//                ->subject('Thanks for online payment to Mission Green');
//        });
//
        return redirect('/')->with('message' , 'Your Payment sent successfully , Thank you!! ');
    }

    public function cashPayment (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        CashPaymentSubmit::CashnewPayment($request);



//        $data = [
//            'name' => $request->name,
//            'email' => $request->email,
//            'phone' => $request->phone,
//            'address' => $request->address,
//        ];
//
//
//
//        Mail::send('front.email.email-sender-payment-cash', $data, function($message) use ($data) {
//            $message->to($data['email'])
//                ->subject('Thanks for cash on Delivery to Mission Green');
//        });



        return redirect('/')->with('message' , 'Your Payment sent successfully , Thank you!! ');
    }
}












