            <!-- Promo video - Testiominals -->
            <section class="testimonials">
                <div class="background bg-img bg-fixed section-padding pb-0" data-background{{asset('assets/="img/banner2.jpg')}}" data-overlay-dark="3">
                    <div class="container">
                        <div class="row">
                            <!-- Promo video -->
                            <div class="col-md-6">
                                <div class="vid-area">
                                    <div class="vid-icon">
                                        @foreach ($contact as $item)
                                        <a class="play-button vid" href="{{$item->yt}}">
                                            <svg class="circle-fill">
                                                <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
                                            </svg>
                                            <svg class="circle-track">
                                                <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
                                            </svg> <span class="polygon">
                                                <i class="ti-control-play"></i>
                                            </span> </a>
                                            @endforeach
                                    </div>
                                    <div class="cont mt-15 mb-30">
                                        <h5>View promo video</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- Testiominals -->
                            <div class="col-md-5 offset-md-1">
                                <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                                    <div class="head-box">
                                        <h4>Clients</h4>
                                    </div>
                                    <div class="owl-carousel owl-theme">
                                        @foreach ($clients as $item)
                                        <div class="item"> 
                                            <span class="quote"><img src="{{asset('assets/img/quot.png')}}" alt=""></span>
                                            <p>{{$item->description}}</p>
                                            <div class="info">
                                                <div class="cont">
                                                    <h6>{{$item->name}}</h6> <span>{{$item->company}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Clients -->
            <section class="clients">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 owl-carousel owl-theme">
                            <div class="clients-logo">
                                <a href="#0"><img src="{{asset('assets/img/clients/1.png')}}" alt=""></a>
                            </div>
                            <div class="clients-logo">
                                <a href="#0"><img src="{{asset('assets/img/clients/2.png')}}" alt=""></a>
                            </div>
                            <div class="clients-logo">
                                <a href="#0"><img src="{{asset('assets/img/clients/3.png')}}" alt=""></a>
                            </div>
                            <div class="clients-logo">
                                <a href="#0"><img src="{{asset('assets/img/clients/4.png')}}" alt=""></a>
                            </div>
                            <div class="clients-logo">
                                <a href="#0"><img src="{{asset('assets/img/clients/5.png')}}" alt=""></a>
                            </div>
                            <div class="clients-logo">
                                <a href="#0"><img src="{{asset('assets/img/clients/6.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer -->
            @foreach ($contact as $item)
            <footer class="main-footer dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mb-30">
                            <div class="item fotcont">
                                <div class="fothead">
                                    <h6>Phone</h6>
                                </div>
                                <p>{{$item->phone}}</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-30">
                            <div class="item fotcont">
                                <div class="fothead">
                                    <h6>Email</h6>
                                </div>
                                <p>{{$item->email}}</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-30">
                            <div class="item fotcont">
                                <div class="fothead">
                                    <h6>Our Address</h6>
                                </div>
                                <p>{{$item->address}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 abot mx-auto">
                                <div class="social-icon">
                                    @if ($item->fb !== null)
                                    <a href="{{$item->fb}}">
                                        <i class="ti-facebook"></i>
                                    </a> 
                                    @endif 
                                    @if ($item->ig !== null)
                                    <a href="{{$item->ig}}">
                                        <i class="ti-instagram"></i>
                                    </a> 
                                    @endif 
                                    @if ($item->email !== null)
                                    <a href="mailto:{{$item->email}}">
                                        <i class="ti-email"></i>
                                    </a> 
                                    @endif 
                                    @if ($item->phone !== null)
                                    <a href="tel:{{$item->phone}}">
                                        <i class="ti-mobile"></i>
                                    </a> 
                                    @endif 
                                    @if ($item->twitter !== null)
                                    <a href="tel:{{$item->twitter}}">
                                        <i class="ti-twitter"></i>
                                    </a> 
                                    @endif 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer> 
                            
            @endforeach
    <!-- jQuery -->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('assets/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('assets/js/pace.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/scrollIt.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
    <script src="{{asset('assets/js/YouTubePopUp.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>

<!-- Mirrored from duruthemes.com/demo/html/bauen/multipage-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Feb 2021 04:49:29 GMT -->
</html>