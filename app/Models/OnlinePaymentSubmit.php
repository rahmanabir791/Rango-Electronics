<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlinePaymentSubmit extends Model
{
    use HasFactory;
    protected static $payment;

    public static function OnlinenewPayment($request)
    {
        self::$payment               =      new OnlinePaymentSubmit();
        self::$payment->price        =      $request->price;
        self::$payment->tnumber      =      $request->tnumber;
        self::$payment->name         =      $request->name;
        self::$payment->email        =      $request->email;
        self::$payment->phone        =      $request->phone;
        self::$payment->address      =      $request->address;
        self::$payment->save();

    }
}
