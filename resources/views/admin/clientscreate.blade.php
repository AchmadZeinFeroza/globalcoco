@extends('admin.layouts.master')
@section('icon')
    <i class="pe-7s-id icon-gradient bg-mean-fruit"></i>
@endsection
@section('title')
    Clients
@endsection
@section('description')
    Tambah konten di Menu Clients Website
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
            <form action={{url('/clientsadmin/store')}} method="POST" enctype="multipart/form-data">
                @csrf
                <div class="position-relative row form-group"><label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10"><input name="name" id="name" placeholder="Entry Name"  class="form-control" required></div>
                </div>
                <div class="position-relative row form-group"><label for="company" class="col-sm-2 col-form-label">Company</label>
                    <div class="col-sm-10"><input name="company" id="company" placeholder="Entry Company"  class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10"><input name="description" id="description" placeholder="Entry description" type="text" class="form-control" required></div>
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