<?php

namespace App\Http\Controllers;

use App\Models\UserInfoModel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.user');
    }

    public function pendinguser()
    {
        $user = UserInfoModel::all();

        return view('user.list')
        ->with('user', $user);
    }

    public function confirmuser(Request $req)
    {
        $usr = new UserModel();
        $usr->name = $req->name;
        $usr->email = $req->email;
        $usr->password = $req->password;
        $usr->phone = $req->phone;
        $usr->address = $req->address;
        $usr->positions = $req->positions;
        $usr->save();

        //delete row after accepting new user
        $deleteData = UserInfoModel::where('id', '=', $req->id)
        ->first();
        $deleteData->delete();

        return redirect()->route('pending-user');
    }

    public function rejectuser(Request $req)
    {
        $deleteData = UserInfoModel::where('id', '=', $req->id)
        ->first();
        $deleteData->delete();

        return redirect()->route('pending-user');  
    }

    public function createuser()
    {
        return view('user.create');
    }

    public function createusersubmit(Request $req)
    {
        $req->validate
        (
            [
                'name'=>'required',
                'email'=>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'password'=>'required',
                'phone'=>'required|min:11|max:14',
                'address'=>'required',
                'role'=>'required'
            ],

            [
                'name.required' => 'Please provide your fullname!',
                'email.required' => 'Please provide your email!',
                'password.required' => 'Please provide your password!',
                'phone.required' => 'Please provide your phone!',
                'address.required' => 'Please provide your address!',
                'role.required' => 'Please provide your position!'
            ]
        );

        $user = new UserModel();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = md5($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->positions = $req->role;
        $user->save();
    
        return redirect()->route('user-list');
    }

    public function userlist()
    {
        $user=UserModel::all();
        return view('user.validuser')
        ->with('user', $user);
    }

    public function edituser(Request $request)
    {
        $editData = UserModel::where('id', '=', $request->id)
        ->first();

        return view('user.details') 
        ->with('editData', $editData);
    }

    public function updateuser(Request $request)
    {
        $updateData = UserModel::where('id', '=', $request->id)
        ->first();

        $updateData->name = $request->Sname;
        $updateData->email = $request->Semail;
        $updateData->phone = $request->Sphone;
        $updateData->address = $request->Saddress;
        $updateData->positions = $request->role;
        $updateData-> save();

        return redirect()->route('user-list');
    }

    public function deleteuser(Request $rq)
    {
        $deleteData = UserModel::where('id', '=', $rq->id)
        ->first();

        $deleteData->delete();
        return redirect()->route('user-list');  
    }
}