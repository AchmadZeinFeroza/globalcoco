@extends('admin.layouts.master') @section('icon')
<i class="pe-7s-culture icon-gradient bg-mean-fruit"></i>
@endsection @section('title') Ganti Username dan Password @endsection
@section('description') Mengelola User Admin Website @endsection
@section('content')
<div class="row">
    <div class="main-card mb-3 card col-12">
        <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">
                    ×
                </button>
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @foreach ($data as $item)
            <form action="{{url('/user/update', $item->id)}}" method="POST">
                @csrf @method('patch')
                <div class="position-relative row form-group">
                    <label for="email" class="col-sm-2 col-form-label"
                        >Username</label
                    >
                    <div class="col-sm-10">
                        <input
                            name="email"
                            id="email"
                            placeholder="Entry email"
                            type="email"
                            class="form-control"
                            value="{{$item->email}}"
                            required
                        />
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="password" class="col-sm-2 col-form-label"
                        >Passwrod Baru</label
                    >
                    <div class="col-sm-10">
                        <input
                            name="password"
                            id="password"
                            placeholder="Masukkan Password Baru"
                            type="password"
                            class="form-control"
                        /><small class="font-italic"
                            >Optional Jika Ingin Ganti Password</small
                        >
                    </div>
                </div>
                <div class="position-relative row form-group">
                    <label for="password" class="col-sm-2 col-form-label"
                        >Konfirmasi Passwrod</label
                    >
                    <div class="col-sm-10">
                        <input
                            name="password_confirmation"
                            placeholder="Masukkan Password Baru"
                            type="password"
                            class="form-control"
                            id="confirm_password"
                         required/>
                        <small id="message"></small>
                    </div>
                </div>
                <div class="position-relative row form-check text-right mb-2">
                    <div class="col-sm-10 offset-sm-2">
                        <button class="btn btn-primary" id="submit" type="submit">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection @section('scripts')
<script type="text/javascript" src="{{asset('admin/assets/scripts/jquery.min.js')}}"></script></body>
<script>
    $("#password ,#confirm_password").on("keyup", function () {
        var value = $("#password").val();
        $(':input[type="submit"]').prop('disabled', true);
        if (value.length <= 8) {
            $("#message").html("Minimal 8 Karakter").css("color", "red");
        } else if ($("#password").val() === $("#confirm_password").val()) {
            $("#message").html("Sudah Cocok").css("color", "green");
            $(':input[type="submit"]').prop('disabled', false);
        } else $("#message").html("Belum Cocok").css("color", "red");
    });
</script>
@endsection
