<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $data = User::get();
        return view('admin.user', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->email = $request['email'];
        if($request['password'] != null){
            $data->password = Hash::make($request['password']);
        }
        $data->save();
        return back()->with('success','produk Berhasil Ditambah');
    }
}
