<?php

namespace App\Http\Controllers;

use App\Thumbnail;
use App\AboutHome;
use App\About;
use App\Service;
use App\Benefit;
use App\Product;
use App\Rempah;
use App\Team;
use App\Contact;
use App\Clients;
use App\Gallery;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function index(){
        $data = Thumbnail::get();
        $about = AboutHome::get();
        $service = Service::get();
        $benefit = Benefit::get();
        $contact = Contact::get();
        $clients = Clients::get();
        return view('user.index', compact('data', 'about','service', 'benefit','contact','clients'));
    }

    public function about(){
        $about = AboutHome::get();
        $data = About::get();
        $contact = Contact::get();
        $clients = Clients::get();
        return view('user.about', compact('about','data','contact','clients'));
    }

    public function product(){
        $data = Product::get();
        $rempah = Rempah::get();
        $contact = Contact::get();
        $clients = Clients::get();
        return view('user.product',compact('data', 'contact','clients', 'rempah'));
    }

    public function gallery(){
        $data = Gallery::get();
        $contact = Contact::get();
        $clients = Clients::get();
        return view('user.gallery',compact('data', 'contact','clients'));
    }

    
    public function contact(){
        $about = AboutHome::get();
        $contact = Contact::get();
        $clients = Clients::get();
        return view('user.contact', compact('about', 'contact','clients'));
    }

    public function showproduct($id){
        $data = Product::find($id);
        $contact = Contact::get();
        $clients = Clients::get();
        return view('user.detail-product',compact('data','contact','clients'));
    }


    public function service(){
        $data = Service::get();
        return view('admin.service', compact('data'));
    }

    public function updateservice(Request $request, Service $service){
        $service->update($request->all());
        return back()->with('success','Service Berhasil Diubah');
    }

    public function benefit(){
        $data = Benefit::get();
        return view('admin.benefit', compact('data'));
    }
    
    public function updatebenefit(Request $request, $id){
        $data = Benefit::find($id);
        $data->title = $request['title'];
        $data->description = $request['description'];
        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $path = $request->file('image')->storeAs('home', $imagePath->getClientOriginalName() , 'public');
            $data->image = '/storage/'.$path;
        }else{
            $data->image = $data->image;
        }
        $data->save();
        return back()->with('success','Benefit Berhasil Diubah');
    }

    public function contactadmin(){
        $data = Contact::get();
        return view('admin.contact', compact('data'));
    }

    public function updatecontact(Request $request){
        $data = Contact::first();
        $data->update($request->all());
        return back()->with('success','Contact Berhasil Diubah');
    }

    public function clientsadmin(){
        $data = Clients::get();
        return view('admin.clients', compact('data'));
    }

    public function create(){
        return view('admin.clientscreate');
    }
    public function store(Request $request){
        Clients::create($request->all());
        return back()->with('success','Clients Berhasil Ditambah');
    }

    public function updateclients(Request $request, Clients $clients){
        $clients->update($request->all());
        return back()->with('success','Clients Berhasil Diubah');
    }

}
