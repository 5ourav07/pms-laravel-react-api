<?php

namespace App\Http\Controllers;

use App\Models\UserInfoModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function loginsubmit(Request $req)
    {
        $req->validate
        (
            [
                'email'=> 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'password'=> 'required',
                'g-recaptcha-response'=> 'required|captcha'
            ],

            [
                'email.required' => 'Please provide your email!',
                'password.required' => 'Please provide your password!',
                'g-recaptcha-response.required' => 'Please check re-captcha!'
            ]
        );

        $user = UserModel::where ('email', $req->email)
        ->select('name', 'email', 'phone', 'id', 'positions')
        ->where ('password', md5($req->password))
        ->first();

        if($user->positions == 'Head')
        {
            $req->session()->flash('msg', 'User exists');
            $req->session()->put('admin', $user->name);
            $req->session()->put('admail' ,$user->email);
            $req->session()->put('adid', $user->id);

            return redirect()->route('home');
        }
        else
        {
            $req->session()->flash('msg', 'User does not exists');
            $message = "Wrong User";

            return view('login.login')
            ->with('message', $message); 
        }
    }

    public function signup()
    {
        return view('login.signup');
    }

    public function signupsubmit(Request $req)
    {
        $req->validate
        (
            [
                'name'=> 'required',
                'email'=> 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'password'=> 'required',
                'phone'=> 'required|min:11|max:14',
                'address' =>'required',
                'g-recaptcha-response'=> 'required|captcha'
            ],

            [
                'name.required' => 'Please provide your fullname!',
                'email.required' => 'Please provide your email!',
                'password.required' => 'Please provide your password!',
                'phone.required' => 'Please provide your phone!',
                'address.required' => 'Please provide your address!',
                'g-recaptcha-response.required' => 'Please check re-captcha!'
            ]
        );

        $usr = new UserInfoModel();
        $usr->name = $req->name;
        $usr->email = $req->email;
        $usr->password = md5($req->password);
        $usr->phone = $req->phone;
        $usr->address = $req->address;
        $usr->save();
    
        return redirect()->route('login');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }
}