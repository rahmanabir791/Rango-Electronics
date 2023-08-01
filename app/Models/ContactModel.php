<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;

    protected static $Contact;

    public static function newContact($request)
    {
        self::$Contact                     =      new ContactModel();
        self::$Contact->name               =      $request->name;
        self::$Contact->email              =      $request->email;
        self::$Contact->mobile             =      $request->mobile;
        self::$Contact->subject            =      $request->subject;
        self::$Contact->message            =      $request->message;
        self::$Contact->save();

    }
}
