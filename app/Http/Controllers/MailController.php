<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function demo_email()
    {
        return view('email.mail_form');
    }

    public function demo_email_send(Request $request)  //this for dynamic email
    {
        $data = [
            'subject' => $request->subject,
            'name' => $request->name,
            'message' => $request->message,
            

        ];

        \Mail::to($request->email)->send(new DemoMail($data));
        return "Email Sent Successfully";
    }

    public function send_email()  //this for static email
    {
        $data = [
            'name' => 'Priotush Sutradhar',
            'message' => 'This is for testing email usin smtp',
        ];

        \Mail::to('programtaker.ptush@gmail.com')->send(new SendMail($data));
        return "Email Sent Successfully to you";
    }
}
