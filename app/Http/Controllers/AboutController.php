<?php

namespace App\Http\Controllers;

use App\AboutHome;
use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AboutController extends Controller
{
    public function index(){
        $data = About::get();
        return view('admin.about',compact('data'));
    }
    public function home(){
        $data = AboutHome::get();
        return view('admin.abouthome', compact('data'));
    }
    public function updatehome(Request $request){
        $data = AboutHome::first();
        $data->description = $request['description'];
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $path = $request->file('image')->storeAs('home', Str::random(8).$imagePath->getClientOriginalName() , 'public');
            $str = str_replace('/storage', '', $data->image);
            unlink(storage_path('app/public'.$str));
            $data->image = '/storage/'.$path;
        }else{
            $data->image = $data->image;
        }
        $data->save();
        return back()->with('success','Thumbnail Berhasil Diubah');
    }
    public function update(Request $request, $id){
        $data = About::find($id);
        $data->title = $request['title'];
        $data->description = $request['description'];
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $path = $request->file('image')->storeAs('about', Str::random(8).$imagePath->getClientOriginalName() , 'public');
            $str = str_replace('/storage', '', $data->image);
            unlink(storage_path('app/public'.$str));
            $data->image = '/storage/'.$path;
        }else{
            $data->image = $data->image;
        }
        $data->save();
        return back()->with('success','About Berhasil Diubah');
    }
}
