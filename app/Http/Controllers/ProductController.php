<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $data = Product::get();
        return view('admin.product', compact('data'));
    }

    public function create(){
        return view('admin.productcreate');
    }

    public function store(Request $request){
        $data = new Product;
        $data->title = $request['title'];
        $data->description = $request['description'];
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $path = $request->file('image')->storeAs('product', Str::random(8).$imagePath->getClientOriginalName() , 'public');
            $data->image = '/storage/'.$path;
        }
        $data->save();
        return back()->with('success','Product Berhasil Ditambah');
    }
    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        $data->title = $request['title'];
        $data->description = $request['description'];
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $path = $request->file('image')->storeAs('product', Str::random(8).$imagePath->getClientOriginalName() , 'public');
            $str = str_replace('/storage', '', $data->image);
            unlink(storage_path('app\public'.str_replace('/', '\\', $str)));
            $data->image = '/storage/'.$path;
        }else{
            $data->image = $data->image;
        }
        $data->save();
        return back()->with('success','Product Berhasil Diubah');
    }

    public function destroy($id){
        $data = Product::find($id);
        $str = str_replace('/storage', '', $data->image);
        unlink(storage_path('app\public'.str_replace('/', '\\', $str)));
        $data->delete();
        return back()->with('success','Product Berhasil Dihapus');
    }
}
