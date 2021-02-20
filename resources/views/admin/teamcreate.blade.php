@extends('admin.layouts.master')
@section('icon')
    <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
@endsection
@section('title')
    Team
@endsection
@section('description')
    Tambah konten di Menu Team Website
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
            <form action="{{url('/teamadmin/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="position-relative row form-group"><label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10"><input name="name" id="name" placeholder="Entry Name"  class="form-control" required></div>
                </div>
                <div class="position-relative row form-group"><label for="job" class="col-sm-2 col-form-label">Job</label>
                    <div class="col-sm-10"><input name="job" id="job" placeholder="Entry Job"  class="form-control" required></div>
                </div>
                <div class="position-relative row form-group"><label for="description" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10"><input name="description" id="description" placeholder="Entry description" type="text" class="form-control" required></div>
                </div>
                <div class="position-relative row form-group"><label for="phone" class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10"><input name="phone" id="phone" placeholder="Entry Phone" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10"><input name="email" id="email" placeholder="Entry Email" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="ig" class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10"><input name="ig" id="ig" placeholder="Entry Link Instagram" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="fb" class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-10"><input name="fb" id="fb" placeholder="Entry Link Facebook" type="text" class="form-control"></div>
                </div>
                <div class="position-relative row form-group"><label for="image" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input name="image" id="image" type="file" class="form-control-file" accept="image/*"  required>
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