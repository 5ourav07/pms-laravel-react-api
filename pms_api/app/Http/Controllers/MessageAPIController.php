<?php

namespace App\Http\Controllers;

use App\Models\message;
use Illuminate\Http\Request;

class MessageAPIController extends Controller
{
    public function message(Request $req)
    {
        try 
        {
            $msg = new message();
            $msg->sender_id = $req->sender_id;
            $msg->receiver = $req->rcver;
            $msg->message = $req->message;
            $msg->attachment = $req->file;

            if ($msg->save()) 
            {
                return response()->json(["message" => "Message Send Successfully"], 200);
            }
        } 
        catch (\Exception $ex) 
        {
            return response()->json(["message" => "Could Not Send"], 500);
        }
    }
}
