<nav class="navbar navbar-expand-lg">
    <!-- Logo -->
    <div class="logo-wrapper valign">
        <div class="logo">
            <a href="index.html"> 
                {{-- <img src={{asset('assets/img/logo.png')}}" class="logo-img" alt=""> --}}
                <h6 class="logo-img">GLOBAL COCO</h6>
                <h2>GLOBAL<span>Coco Indonesia</span></h2>
            </a>
        </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('/product')}}">Product</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
        </ul>
    </div>
</nav>