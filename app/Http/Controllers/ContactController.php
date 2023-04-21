<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
    
        $contactFormData = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];
    
        $email = new ContactFormMail($contactFormData);
    
        Mail::to('ryno952@gmail.com')->send($email);
    
        return redirect('/contact')->with('success', 'Thank you for your message. We will get back to you shortly!');
    }
}
