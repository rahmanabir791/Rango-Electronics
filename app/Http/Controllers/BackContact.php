<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BackContact extends Controller
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



        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];



        Mail::send('back.email.email-sender-contact', $data, function($message) use ($data) {
            $message->to($data['email'])
                ->subject('Thanks for contacting with us!');
        });


        return redirect()->back()->with('message' , 'Your message has been sent, Thank you!! ');
    }




    public function contactView ()
    {
        return view('back.pages.contactView',
            ['contacts' => ContactModel::orderBy('id' , 'DESC')->latest()->get()]
        );
    }

    public function deleteContacts($id)
    {
        $this->contact = ContactModel::find($id);
        if (file_exists($this->contact->image))
        {
            unlink($this->contact->image);
        }
        $this->contact->delete();
        return redirect()->back()->with('message-for-delete', 'This Message deleted successfully');
    }
}
