<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    public function index(){
        $data = Team::get();
        return view('admin.team', compact('data'));
    }

    public function create(){
        return view('admin.teamcreate');
    }

    public function store(Request $request){
        $data = new Team;
        $data->name = $request['name'];
        $data->job = $request['job'];
        $data->description = $request['description'];
        $data->phone = $request['phone'];
        $data->ig = $request['ig'];
        $data->email = $request['email'];
        $data->fb = $request['fb'];
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $path = $request->file('image')->storeAs('team', Str::random(8).$imagePath->getClientOriginalName() , 'public');
            $data->image = '/storage/'.$path;
        }
        $data->save();
        return back()->with('success','Team Berhasil Ditambah');
    }

    public function update(Request $request, $id)
    {
        $data = Team::find($id);
        $data->name = $request['name'];
        $data->job = $request['job'];
        $data->description = $request['description'];
        $data->phone = $request['phone'];
        $data->ig = $request['ig'];
        $data->email = $request['email'];
        $data->fb = $request['fb'];
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $path = $request->file('image')->storeAs('team', Str::random(8).$imagePath->getClientOriginalName() , 'public');
            $str = str_replace('/storage', '', $data->image);
            unlink(storage_path('app\public'.str_replace('/', '\\', $str)));
            $data->image = '/storage/'.$path;
        }else{
            $data->image = $data->image;
        }
        $data->save();
        return back()->with('success','Team Berhasil Diubah');
    }

    public function destroy($id){
        $data = Team::find($id);
        $str = str_replace('/storage', '', $data->image);
        unlink(storage_path('app\public'.str_replace('/', '\\', $str)));
        $data->delete();
        return back()->with('success','Product Berhasil Dihapus');
    }
}
