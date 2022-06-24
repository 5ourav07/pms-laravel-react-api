<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\register;
use App\Models\task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class HomeAPIController extends Controller
{
    public function usercount()
    {
        $user = register::count();
        return response()->json([
            'status'=>'Success',
            'data'=>$user
        ]);
    }

    public function projectcount()
    {
        $project = project::count();
        return response()->json([
            'status'=>'Success',
            'data'=>$project
        ]);
    }

    public function taskcount()
    {
        $task = task::count();
        return response()->json([
            'status'=>'Success',
            'data'=>$task
        ]);
    }

    public function email(Request $request)
    {
        $email = $request->email;

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message
        );

        Mail::to($email)->send(new SendMail($data));
        return response()->json([
            'status'=>'Success'
        ]);
    }

    public function profile()
    {
        
    }
}
