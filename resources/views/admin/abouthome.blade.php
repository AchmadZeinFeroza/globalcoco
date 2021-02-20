@extends('admin.layouts.master')
@section('icon')
    <i class="pe-7s-info icon-gradient bg-mean-fruit"></i>
@endsection
@section('title')
    About
@endsection
@section('description')
    Mengelola Konten About di Menu Home Website
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
            <div class="tab-content">
                @foreach ($data as $item)
                    <form action="{{url('/abouthome/update')}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('patch')
                        <div class="position-relative row form-group">
                            <label for="descriptipon" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea name="description" class="col-md-12 form-control">
                                    {{$item->description}}
                                </textarea>
                            </div>
                        </div>
                        <div class="position-relative row form-group"><label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input name="image" id="image" type="file" class="form-control-file" accept="image/*">
                                <img src="{{asset($item->image)}}" alt="" class="img-fluid rounded mt-5">
                            </div>
                        </div>
                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection