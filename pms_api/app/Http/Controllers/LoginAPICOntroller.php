<?php

namespace App\Http\Controllers;
use App\Models\register;
use Illuminate\Http\Request;

class LoginAPIController extends Controller
{
    public function login(Request $req)
    {
        try
        {
            $user = register::where('email', $req->email)
            ->where('password', md5($req->password))
            ->first();

            if($user)
            {
                return response()->json(
                    [
                        'status'=>'Success',
                        'data'=>[
                            'id'=>$user->id
                        ]
                    ]
                );
            }

            throw new \ErrorException("User or password did not match");
        }
        catch(\Exception $e)
        {
            return response()->json(
                [
                    'status'=>'Failed',
                    'message'=> $e->getMessage()
                ], 
            404);
        }
    }
}
