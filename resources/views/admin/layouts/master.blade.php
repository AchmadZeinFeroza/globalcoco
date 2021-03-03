@include('admin.layouts.header')
        <div class="app-main__outer">
            <div class="app-main__inner">
            @include('admin.layouts.navigation')
            {{-- Isi Konten --}}
            @yield('content')
            {{-- Akhir Konten  --}}
            </div>
        </div>
    </div>
</div>
@yield('scripts')
@include('admin.layouts.footer')