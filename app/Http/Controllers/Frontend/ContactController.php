<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{

   

   public function index()
    {
        return view('frontend.contact');
    }


    public function send(Request $request)
    {
        $request->validate([
            'con_name' => 'required|string|max:255',
            'con_email' => 'required|email',
            'con_message' => 'required|string|max:1000',
        ]);

        $data = [
            'name' => $request->con_name,
            'email' => $request->con_email,
            'message' => $request->con_message,
        ];

        Mail::to('sanjay.redback@gmail.com')->send(new ContactMessageMail($data));
return response('Message sent', 200);
    }
}
