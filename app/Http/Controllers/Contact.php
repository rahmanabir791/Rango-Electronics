<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public function submitcontact (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        ContactModel::newContact($request);


//
//        $data = [
//            'subject' => $request->subject,
//            'name' => $request->name,
//            'email' => $request->email,
//            'content' => $request->message
//        ];
//
//
//
//        Mail::send('back.email.email-sender-contact', $data, function($message) use ($data) {
//            $message->to($data['email'])
//                ->subject('Thanks for contacting Rahman Abir!');
//        });


        return redirect()->back()->with('message' , 'Your message has been sent, Thank you!! ');
    }
}
