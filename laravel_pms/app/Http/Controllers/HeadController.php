<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Session;

class HeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.user');
    }

    public function profile()
    {
        $id = session()->get('adid');

        $profile = UserModel::where('id', '=', $id)
        ->first();

        return view('heads.profile')
        ->with('profile', $profile);
    }

    public function profilesubmit(Request $req)
    {
        $updateData = UserModel::where('id', '=', $req->id)
        ->first();

        $updateData->name = $req->name;
        // $updateData->email = $req->email;
        $updateData->phone = $req->phone;
        $updateData->address = $req->address;
        // $updateData->password = md5($req->password);
        $updateData-> save();

        Session::flash('msg', 'Data Updated Successfully!');

        return redirect()->route('profile');
    }
}
