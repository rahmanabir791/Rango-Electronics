<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\RegisterEvent;
use Illuminate\Support\Facades\Mail;

class BackForntController extends Controller
{
    public $status;
    public function home ()
    {
        return view('back.pages.home');
    }



    public function productDetails($id)
    {
        return view('back.front.pages.details', [
            'product'   => Product::find($id),
        ]);
    }



    public function service()
    {
        return view('back.front.pages.service');
    }





    public function events()
    {
        return view('back.front.pages.event.events', [
            'events'  => Events::orderBy('id', 'DESC')->get()->all()
        ]);
    }

    public function eventsDetails ($id)
    {
        return view('back.front.pages.event.eventDetails', [
            'event' => Events::find($id),
        ]);
    }

    public function eventsRegistrations ($id)
    {
        return view('back.front.pages.event.eventform',[
            'event' => Events::find($id),
        ]);
    }

    public function regEvent (Request $request)
    {
        RegisterEvent::resisterEvent($request);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'eventName' => $request->EventName,
            'eventDate' => $request->EventDate,
            'eventTime' => $request->EventTime,
        ];



        Mail::send('back.email.email-sender-register-event', $data, function($message) use ($data) {
            $message->to($data['email'])
                ->subject('Thanks for Registering our Event!');

        });



        return redirect('Green-Mission/Home')->with('message', 'Your Event has been successfully registered. Thank you....!!!');
    }





    public function allTree()
    {
        return view('back.front.pages.seeAll.allTree', [
            'products'  => Product::orderBy('id', 'DESC')->get()->all()
        ]);
    }

    public function allSeeds()
    {
        return view('back.front.pages.seeAll.allSeeds', [
            'products'  => Product::orderBy('id', 'DESC')->get()->all()
        ]);
    }

    public function allAccessories()
    {
        return view('back.front.pages.seeAll.allAccessories', [
            'products'  => Product::orderBy('id', 'DESC')->get()->all()
        ]);
    }

    public function allMedicines()
    {
        return view('back.front.pages.seeAll.allMedicines', [
            'products'  => Product::orderBy('id', 'DESC')->get()->all()
        ]);
    }



    public function payment($id)
    {
        return view('front.pages.payment.payment',[
            'product'   => Product::find($id),
        ]);
    }


    public function confirmPayment(Request $request)
    {


        if ( $request->status == 0 ){
            return view('front.pages.payment.cashDelivery',[
                'price' => $request->price,
            ]);
        }
        else
            return view('front.pages.payment.onlineDelivery',[
                'price' => $request->price,
            ]);

    }






        public function contacts()
    {
        return view('back.front.pages.contacts');
    }

}
