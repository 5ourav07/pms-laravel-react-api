<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.user');
    }

    public function message()
    {
        return view('message.create');
    }

    public function sendmessage(Request $req)
    {
        $req->validate
        (
            [
                'rcver'=>'required',
                'message'=>'required',
            ],

            [
                'rcver.required' => 'Please select a receiver!',
                'message.required' => 'Please type your messages!'
            ]
        );
        
        $msg= new Message();
        $msg->sender_id = $req->sender_id;
        $msg->receiver = $req->rcver;
        $msg->message = $req->message;
        $msg->attachment = $req->file;
        $msg->save();
       
        return redirect()->route('message-list');
    }

    public function deletemessage(Request $req)
    {
        $deleteData = Message::where('id', '=', $req->id)
        ->first();

        $deleteData->delete();
        return redirect()->route('message-list');  
    }

    public function messagelist()
    {
        
        $messages = Message::all();

        return view('message.list')
        ->with('messages', $messages);
    }
}
