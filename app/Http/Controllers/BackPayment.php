<?php

namespace App\Http\Controllers;

use App\Models\CashPaymentSubmit;
use App\Models\OnlinePaymentSubmit;
use Illuminate\Http\Request;


class BackPayment extends Controller
{
    public $payment;
    public function paymentView ()
    {
        return view('back.pages.PaymentView',
            [
            'onlinePayments' => OnlinePaymentSubmit::orderBy('id' , 'DESC')->latest()->get(),
            'cashPayments' => CashPaymentSubmit::orderBy('id' , 'DESC')->latest()->get(),
            ]
        );
    }

    public function deletePayment($id)
    {
        $this->payment = OnlinePaymentSubmit::find($id);
        $this->payment = CashPaymentSubmit::find($id);
        if (file_exists($this->payment->image))
        {
            unlink($this->payment->image);
        }
        $this->payment->delete();
        return redirect()->back()->with('message-for-delete', 'This Payment Details deleted successfully');
    }
}
