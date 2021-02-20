@extends('admin.layouts.master')
@section('icon')
    <i class="pe-7s-config icon-gradient bg-mean-fruit"></i>
@endsection
@section('title')
    Service
@endsection
@section('description')
    Mengelola Konten Service di Menu Home Website
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
                    <a data-toggle="tab" href="#tab-{{$item->id}}" class="active nav-link"><span> {{$item->title}}</span></a>
                </li>
                @else
                <li class="nav-item">
                    <a data-toggle="tab" href="#tab-{{$item->id}}" class="nav-link"><span> {{$item->title}} </span></a>
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
                    <form action="{{url('/service/update' , $item->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('patch')
                        <div class="position-relative row form-group"><label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10"><input name="title" id="title" placeholder="Entry Title" type="title" class="form-control" value="{{$item->title}}" required></div>
                        </div>
                        <div class="position-relative row form-group"><label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10"><input name="description" id="description" placeholder="Entry description" type="text" class="form-control" value="{{$item->description}}" required></div>
                        </div>
                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
                @else
                <div class="tab-pane" id="tab-{{$item->id}}" role="tabpanel">
                    <form action="{{url('/service/update' , $item->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('patch')
                        <div class="position-relative row form-group"><label for="title" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10"><input name="title" id="title" placeholder="Entry Title" type="title" class="form-control" value="{{$item->title}}" required></div>
                        </div>
                        <div class="position-relative row form-group"><label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10"><input name="description" id="description" placeholder="Entry description" type="text" class="form-control" value="{{$item->description}}" required></div>
                        </div>
                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </div>
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
</div>
@endsection