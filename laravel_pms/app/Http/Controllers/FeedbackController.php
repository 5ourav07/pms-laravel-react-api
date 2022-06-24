<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class FeedbackController extends Controller
{
    function feedback()
    {
        return view('feedback.send_email');
    }

    function feedbacksend(Request $request)
    {
        $email = $request->email;

        $request->validate
        (
            [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required'
            ],

            [
                'name.required' => 'Please provide your name!',
                'email.required' => 'Please provide your email!',
                'message.required' => 'Please provide your email message!'
            ]
        );

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,        
        );

        Mail::to($email)->send(new SendMail($data));
        return back()->with('success', 'Thanks for contacting us!');
    }
}
