<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected static $event;

    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function imageUpload ($request, $event=null)
    {
        self::$image = $request->file('image');
        if (self::$image)
        {
            if (isset($event))
            {
                if (file_exists($event->image))
                {
                    unlink($event->image);
                }
            }
            self::$imageName = time().rand(10,1000).'.'.self::$image->getClientOriginalExtension();
            self::$imageDirectory = 'Back-Image/Events-Image/image/';
            self::$image->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory.self::$imageName;
        } else {
            self::$imageUrl = $event->image;
        }
        return self::$imageUrl;
    }

    public static function newEvents($request)
    {
        self::$event                      = new Events();
        self::$event->name                = $request->name;
        self::$event->category_name       = $request->category_name;
        self::$event->date                = $request->date;
        self::$event->time                = $request->time;
        self::$event->LDORdate            = $request->LDORdate;
        self::$event->description         = $request->description;
        self::$event->image               = self::imageUpload($request);
        self::$event->status              = $request->status;
        self::$event->save();
    }

    public static function updateEvents ($request, $id)
    {
        self::$event                      = Events::find($id);
        self::$event->name                = $request->name;
        self::$event->category_name       = $request->category_name;
        self::$event->date                = $request->date;
        self::$event->LDORdate            = $request->LDORdate;
        self::$event->description         = $request->description;
        self::$event->image               = self::imageUpload($request, self::$event);
        self::$event->status              = $request->status;
        self::$event->save();
    }
}
