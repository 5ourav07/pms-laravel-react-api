<?php

namespace App\Http\Controllers;
use App\Models\register;
use Illuminate\Http\Request;

class RegisterAPIController extends Controller
{
    public function show()
    {
        $user = register::all();
        return response()->json(["user" => $user], 200);
    }

    public function add(Request $req)
    {
        try
        {
            $user = new register();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = md5($req->password);
            $user->phone = $req->phone;
            $user->address = $req->address;
            if($user->save())
            {
                return response()->json(["message" => "User is Registered Successfully"], 200);
            }
        }
        catch(\Exception $ex)
        {
            return response()->json(["message" => "ERROR"], 500);
        }
    }
}
