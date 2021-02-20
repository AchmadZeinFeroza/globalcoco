@extends('admin.layouts.master')
@section('icon')
    <i class="pe-7s-culture icon-gradient bg-mean-fruit"></i>
@endsection
@section('title')
    Contact
@endsection
@section('description')
    Mengelola konten di Menu Contact Website
@endsection
@section('content')
<div class="row">
    <div class="main-card mb-3 card col-12">
        <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
            </div>
            @endif
            @foreach ($data as $item)
            <form action="{{url('/contact/update')}}" method="POST">
                @csrf @method('patch')
                <div class="position-relative row form-group"><label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10"><input name="phone" id="phone" placeholder="Entry Phone" type="text" class="form-control" value="{{$item->phone}}"></div>
                </div>
                <div class="position-relative row form-group"><label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10"><input name="address" id="address" placeholder="Entry Address" type="text" class="form-control" value="{{$item->address}}"></div>
                </div>
                <div class="position-relative row form-group"><label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                    <div class="col-sm-10"><input name="twitter" id="twitter" placeholder="Entry Twitter" type="text" class="form-control" value="{{$item->twitter}}"></div>
                </div>
                <div class="position-relative row form-group"><label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10"><input name="email" id="email" placeholder="Entry Email" type="text" class="form-control" value="{{$item->email}}"></div>
                </div>
                <div class="position-relative row form-group"><label for="ig" class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10"><input name="ig" id="ig" placeholder="Entry Link Instagram" type="text" class="form-control" value="{{$item->ig}}"></div>
                </div>
                <div class="position-relative row form-group"><label for="fb" class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-10"><input name="fb" id="fb" placeholder="Entry Link Facebook" type="text" class="form-control" value="{{$item->fb}}"></div>
                </div>
                <div class="position-relative row form-group"><label for="yt" class="col-sm-2 col-form-label">Youtube</label>
                    <div class="col-sm-10"><input name="yt" id="yt" placeholder="Entry Link Youtube" type="text" class="form-control" value="{{$item->yt}}"></div>
                </div>
                <div class="position-relative row form-group">
                    <label for="map" class="col-sm-2 col-form-label">Embed Map</label>
                    <div class="col-sm-10">
                        <textarea name="map" class="col-md-12 form-control">
                            {{$item->map}}
                        </textarea>
                    </div>
                </div>
                <div class="position-relative row form-check text-right mb-2">
                    <div class="col-sm-10 offset-sm-2">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection