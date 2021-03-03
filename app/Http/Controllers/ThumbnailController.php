<?php

namespace App\Http\Controllers;

use App\Thumbnail;
use App\Gallery;
use Illuminate\Http\Request;

class ThumbnailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Thumbnail::get();
        return view('admin.thumbnail', compact('data'));
    }

    public function gallery(){
        $data = Gallery::get();
        return view('gallery', compact('data'));
    }
    public function galleryadmin(){
        $data = Gallery::get();
        return view('admin.gallery', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Thumbnail;
        $data->title = $request['title'];
        $data->description = $request['description'];
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $path = $request->file('image')->storeAs('thumbnail', $imagePath->getClientOriginalName() , 'public');
        }
        $data->image = '/storage/'.$path;
        $data->save();
        return back()->with('success','Product created successfully.');
    }

    public function update(Request $request, Thumbnail $thumbnail)
    {
        $data = Thumbnail::find($thumbnail['id']);
        $data->title = $request['title'];
        $data->description = $request['description'];
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $path = $request->file('image')->storeAs('thumbnail', $imagePath->getClientOriginalName() , 'public');
            $data->image = '/storage/'.$path;
        }else{
            $data->image = $data->image;
        }
        $data->save();
        return back()->with('success','Thumbnail Berhasil Diubah');
    }

}
