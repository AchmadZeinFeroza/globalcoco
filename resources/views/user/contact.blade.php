@include('user.layout.header')
@include('user.layout.navigation')
        <!-- Feedback Form -->
        <div class="g-position--relative g-bg-color--primary">
            <div class="g-container--md g-padding-y-125--xs">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs  wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Contact Us</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white">Global Coco Indonesia</h2>
                </div>
                <div class="row g-row-col--5 g-margin-b-80--xs">
                    @foreach ($contact as $item)
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm   wow bounceInLeft" data-wow-duration="3s">
                        <div class="g-text-center--xs">
                            <a href="mailto:{{$item->email}}">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-email"></i>
                            </a>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Email</h4>
                            <p class="g-color--white-opacity">{{$item->email}}</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm wow bounceInDown" data-wow-duration="3s">
                        <div class="g-text-center--xs">
                            <a href="{{$item->map}}">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-map-alt"></i>
                            </a>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Address</h4>
                            <p class="g-color--white-opacity">{{$item->address}}</p>
                        </div>
                    </div>
                    <div class="col-xs-4 g-full-width--xs wow bounceInRight" data-wow-duration="3s">
                        <div class="g-text-center--xs">
                            <a href="tel:{{$item->phone}}">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-30--xs ti-headphone-alt"></i>
                            </a>
                            <h4 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">Call at</h4>
                            <p class="g-color--white-opacity">{{$item->phone}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <br><br><br><br><br><br><br>
            <img class="s-mockup-v2  wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s" src="{{asset('megakit/img/mockups/pencil-01.png')}}" alt="Mockup Image">
        </div>

		<a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

		<!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
		<!-- Vendor -->
		<script type="text/javascript" src="{{asset('megakit/vendor/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/vendor/jquery.migrate.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/vendor/jquery.smooth-scroll.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/vendor/jquery.back-to-top.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/vendor/scrollbar/jquery.scrollbar.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/vendor/jquery.parallax.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/vendor/swiper/swiper.jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/vendor/jquery.wow.min.js')}}"></script>

		<!-- General Components and Settings -->
		<script type="text/javascript" src="{{asset('megakit/js/global.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/js/components/header-sticky.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/js/components/scrollbar.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/js/components/magnific-popup.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/js/components/swiper.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('megakit/js/components/wow.min.js')}}"></script>
		<!--========== END JAVASCRIPTS ==========-->
	</body>
	<!-- End Body -->
</html>
