<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class UserAPIController extends Controller
{
    public function show()
    {
        $user = user::all();
        return response()->json(["user" => $user], 200);
    }

    public function get(Request $req)
    {
        $user = user::where('id', $req->id)
        ->first();

        if($user)
        {
            return response()->json($user, 200);
        }
        else
        {
            return response()->json(["message" => "Not Found"], 404);
        }        
    }

    public function add(Request $req)
    {
        try
        {
            $user = new user();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = md5($req->password);
            $user->phone = $req->phone;
            $user->address = $req->address;
            $user->positions = $req->positions;
            if($user->save())
            {
                return response()->json(["message" => "User Added Successfully"], 200);
            }
        }
        catch(\Exception $ex)
        {
            return response()->json(["message" => "Could Not Add"], 500);
        }
    }

    public function update(Request $req)
    {
        $user = user::where('id', $req->id)
        ->first();

        if($user)
        {
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = md5($req->password);
            $user->phone = $req->phone;
            $user->address = $req->address;
            $user->positions = $req->positions;
            if($user->save())
            {
                return response()->json(["message" => "User Updated Successfully"], 200);
            }
        }
        else
        {
            return response()->json(["message" => "Not Found"], 404);
        }        
    }

    public function delete(Request $req)
    {
        $user = user::where('id', $req->id)
        ->first();

        if($user)
        {
            $user->delete();
            return response()->json(["message" => "User Deleted Successfully"], 200);
        }
        else
        {
            return response()->json(["message" => "Not Found"], 404);
        }        
    }
}
