@extends('admin.layouts.master')
@section('icon')
    <i class="pe-7s-users icon-gradient bg-mean-fruit"></i>
@endsection
@section('title')
    Team
@endsection
@section('description')
    Mengelola Kkonten di Menu Team Website
@endsection
@section('content')
<div class="row">
    <div class="main-card mb-3 card col-12">
        <div class="card-body">
            <ul class="tabs-animated-shadow nav-justified tabs-animated nav">
                @php
                $i = 1 ;
                @endphp
                @foreach ($data as $item)
                @if ( $i === 1)
                <li class="nav-item">
                    <a data-toggle="tab" href="#tab-{{$item->id}}" class="active nav-link"><span> {{$item->name}}</span></a>
                </li>
                @else
                <li class="nav-item">
                    <a data-toggle="tab" href="#tab-{{$item->id}}" class="nav-link"><span> {{$item->name}} </span></a>
                </li>
                @endif
                @php
                $i++;
                @endphp
                @endforeach    
            </ul>
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="tab-content">
                @php
                $j = 1 ;
                @endphp
                @foreach ($data as $item)
                @if ( $j === 1)
                <div class="tab-pane active" id="tab-{{$item->id}}" role="tabpanel">
                    <form action="{{url('/team/update', $item->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('patch')
                        <div class="position-relative row form-group"><label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10"><input name="name" id="name" placeholder="Entry Name"  class="form-control" value="{{$item->name}}" required></div>
                        </div>
                        <div class="position-relative row form-group"><label for="job" class="col-sm-2 col-form-label">Job</label>
                            <div class="col-sm-10"><input name="job" id="job" placeholder="Entry Job"  class="form-control" value="{{$item->job}}" required></div>
                        </div>
                        <div class="position-relative row form-group"><label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10"><input name="description" id="description" placeholder="Entry description" type="text" class="form-control" value="{{$item->description}}" required></div>
                        </div>
                        <div class="position-relative row form-group"><label for="phone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10"><input name="phone" id="phone" placeholder="Entry Phone" type="text" class="form-control" value="{{$item->phone}}"></div>
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
                        <div class="position-relative row form-group"><label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input name="image" id="image" type="file" class="form-control-file"  accept="image/*">
                                <img src="{{asset($item->image)}}" alt="" class="img-fluid rounded mt-5">
                            </div>
                        </div>
                        <div class="position-relative row form-check text-right mb-2">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                    <form action="{{url('/team/delete', $item->id)}}" method="POST" class="float-right">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin ingin menghapus {{$item->name}} ?')" type="submit">Hapus</button>
                    </form>
                </div>
                @else
                <div class="tab-pane" id="tab-{{$item->id}}" role="tabpanel">
                    <form action="{{url('/team/update', $item->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('patch')
                        <div class="position-relative row form-group"><label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10"><input name="name" id="name" placeholder="Entry Name"  class="form-control" value="{{$item->name}}" required></div>
                        </div>
                        <div class="position-relative row form-group"><label for="job" class="col-sm-2 col-form-label">Job</label>
                            <div class="col-sm-10"><input name="job" id="job" placeholder="Entry Job"  class="form-control" value="{{$item->job}}" required></div>
                        </div>
                        <div class="position-relative row form-group"><label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10"><input name="description" id="description" placeholder="Entry description" type="text" class="form-control" value="{{$item->description}}" required></div>
                        </div>
                        <div class="position-relative row form-group"><label for="phone" class="col-sm-2 col-form-label">Phone</label>
                            <div class="col-sm-10"><input name="phone" id="phone" placeholder="Entry Phone" type="text" class="form-control" value="{{$item->phone}}"></div>
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
                        <div class="position-relative row form-group"><label for="image" class="col-sm-2 col-form-label">Image</label>
                            <div class="col-sm-10">
                                <input name="image" id="image" type="file" class="form-control-file"   accept="image/*">
                                <img src="{{asset($item->image)}}" alt="" class="img-fluid rounded mt-5">
                            </div>
                        </div>
                        <div class="position-relative row form-check text-right mb-2">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>

                    <form action="{{url('/team/delete', $item->id)}}" method="POST" class="float-right">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger text-white" onclick="return confirm('Apakah anda yakin ingin menghapus {{$item->name}} ?')" type="submit">Hapus</button>
                    </form>
                </div>
                @endif
                @php
                $j++;
                @endphp
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="container">
            <a href="{{url('teamadmin/create')}}" class="btn btn-success btn-lg btn-block mb-3"> Tambah </a>
        </div>
    </div>
</div>
@endsection