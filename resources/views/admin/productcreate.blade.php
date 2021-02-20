@extends('admin.layouts.master')
@section('icon')
    <i class="pe-7s-box2 icon-gradient bg-mean-fruit"></i>
@endsection
@section('title')
    Product
@endsection
@section('description')
    Tambah Konten di Menu Product Website
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
            <form action="{{url('productadmin/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="position-relative row form-group"><label for="title" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10"><input name="title" id="title" placeholder="Entry Title" type="title" class="form-control" required></div>
                </div>
                <div class="position-relative row form-group"><label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10"><input name="description" id="description" placeholder="Entry description" type="text" class="form-control" required></div>
                </div>
                <div class="position-relative row form-group"><label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input name="image" id="image" type="file" class="form-control-file"  required  accept="image/*">
                    </div>
                </div>
                <div class="position-relative row form-check text-right mb-2">
                    <div class="col-sm-10 offset-sm-2">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection