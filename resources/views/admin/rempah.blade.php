@extends('admin.layouts.master')
@section('icon')
    <i class="pe-7s-box2 icon-gradient bg-mean-fruit"></i>
@endsection
@section('title')
    Rempah
@endsection
@section('description')
    Mengelola Konten Rempah di Menu Product Website
@endsection
@section('content')
<div class="row">
    <div class="main-card mb-3 card col-12">
    </div>
    <div class="col-md-12">
        <div class="container">
            <div class="card-body">
                @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
            </div>
            @endif
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6 mb-3">
                            <img src="{{asset($item->image)}}" class="zoom img-fluid" alt="Gambar TIdak Merespon">
                        <button type="button" data-id="{{$item->id}}" title="Hapus" class="btn btn-danger hapus" style="position: absolute; top: 0; right: 15px;"><i class="fas fa-trash"></i></button>
                    </div>
                    @endforeach
                </div>
            </div>
            <button type="button" data-toggle="modal" data-target="#newImageModal" class="btn btn-success btn-lg btn-block mb-3">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="fa fa-plus fa-w-20"></i>
                </span>
                Tambah
            </button>
        </div>
    </div>
</div>
@endsection

<div class="modal fade" id="newImageModal" tabindex="-1" role="dialog" aria-labelledby="newImageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newImageModalLabel">Tambah Gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class='content'>
                    <form action="{{url('/rempahadmin/upload')}}" class="dropzone" id='image-upload' files="true" method="POST" enctype="multipart/form-data" >
                    @csrf
                    </form>
                    <div class="text-center mt-3">
                        <a href="" type="button" class="btn btn-success">Upload</a>
                    </div>
                  </div> 
            </div>
        </div>
    </div>
</div>

<form class="delete-image" action="" method="POST">
    @csrf @method('delete')
</form>
@section('scripts')
<script type="text/javascript" src="{{asset('admin/assets/scripts/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('admin/assets/scripts/dropzone.min.js')}}"></script>
{{-- <script type="text/javascript" src="{{asset('admin/assets/scripts/dropzone.min.css')}}"></script> --}}
<script>
    Dropzone.options.imageUpload = {
            maxFilesize         :       3,
            addRemoveLinks: true,
            dictRemoveFile: 'Remove file',
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };

    $(document).on('click','.hapus', function() {
        $('.delete-image').attr('action', "{{ url('rempahadmin/delete') }}/" + $(this).data('id'));
        if(confirm('Apakah anda yakin ingin menghapus foto ini? ')){
            $('.delete-image').submit();
        };
    });
    $(document).on('click','#submit-all', function() {
        location.reload();
    });
</script>

@endsection