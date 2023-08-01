<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashPaymentSubmit extends Model
{
    use HasFactory;
    protected static $payment;


    public static function CashnewPayment($request)
    {
        self::$payment               =      new CashPaymentSubmit();
        self::$payment->price        =      $request->price;
        self::$payment->name         =      $request->name;
        self::$payment->email        =      $request->email;
        self::$payment->phone        =      $request->phone;
        self::$payment->address      =      $request->address;
        self::$payment->save();

    }
}
