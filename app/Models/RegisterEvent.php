<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterEvent extends Model
{
    use HasFactory;
    protected static $eventReg;

    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function imageUpload ($request, $eventReg=null)
    {
        self::$image = $request->file('image');
        if (self::$image)
        {
            if (isset($eventReg))
            {
                if (file_exists($eventReg->image))
                {
                    unlink($eventReg->image);
                }
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$imageDirectory = 'Back-Image/Event-Register-Image/image/';
            self::$image->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        } else {
            self::$imageUrl = $eventReg->image;
        }
        return self::$imageUrl;
    }

    public static function resisterEvent($request)
    {
        self::$eventReg                           = new RegisterEvent();
        self::$eventReg->EventName                = $request->EventName;
        self::$eventReg->EventDate                = $request->EventDate;
        self::$eventReg->EventTime                = $request->EventTime;
        self::$eventReg->name                     = $request->name;
        self::$eventReg->email                    = $request->email;
        self::$eventReg->no1                      = $request->no1;
        self::$eventReg->no2                      = $request->no2;
        self::$eventReg->image                    = self::imageUpload($request);
        self::$eventReg->occupation               = $request->occupation;
        self::$eventReg->religion                 = $request->religion;
        self::$eventReg->gender                   = $request->gender;
        self::$eventReg->address                  = $request->address;
        self::$eventReg->save();
    }

    public static function updateProduct ($request, $id)
    {
        self::$eventReg                      = RegisterEvent::find($id);
        self::$eventReg->EventName                = $request->EventName;
        self::$eventReg->EventDate                = $request->EventDate;
        self::$eventReg->EventTime                = $request->EventTime;
        self::$eventReg->name                     = $request->name;
        self::$eventReg->email                    = $request->email;
        self::$eventReg->no1                      = $request->no1;
        self::$eventReg->no2                      = $request->no2;
        self::$eventReg->image                    = self::imageUpload($request);
        self::$eventReg->occupation               = $request->occupation;
        self::$eventReg->religion                 = $request->religion;
        self::$eventReg->gender                   = $request->gender;
        self::$eventReg->address                  = $request->address;
        self::$eventReg->save();
    }

}
