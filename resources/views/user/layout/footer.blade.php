
			<div class="row">
				<div class="col-sm-12">
					<div class="s-promo-block-v7 g-bg-position--center g-bg-color--dark-light" style="background: url('img/1920x1080/05.jpg') no-repeat">
						<footer>
							<!-- Links -->
							
							<!-- End Links -->

							<!-- Copyright -->
							<div class="container g-padding-y-50--xs">
								<div class="row">
                                    @foreach ($contact as $item)
                                    <div class="col-xs-8">
                                        <div class="social-icon">
                                            @if ($item->fb !== null)
                                            <a href="https://{{$item->fb}}">
                                                <i class="g-font-size-30--xs g-color--white-opacity g-margin-b-30--xs g-padding-x-15--xs ti-facebook"></i>
                                            </a> 
                                            @endif 
                                            @if ($item->ig !== null)
                                            <a href="https://{{$item->ig}}">
                                                <i class="g-font-size-30--xs g-color--white-opacity g-margin-b-30--xs g-padding-x-15--xs ti-instagram"></i>
                                            </a> 
                                            @endif 
                                            @if ($item->email !== null)
                                            <a href="mailto:{{$item->email}}">
                                                <i class="g-font-size-30--xs g-color--white-opacity g-margin-b-30--xs g-padding-x-15--xs ti-email"></i>
                                            </a> 
                                            @endif 
                                            @if ($item->phone !== null)
                                            <a href="tel:{{$item->phone}}">
                                                <i class="g-font-size-30--xs g-color--white-opacity g-margin-b-30--xs g-padding-x-15--xs ti-mobile"></i>
                                            </a> 
                                            @endif 
                                            @if ($item->twitter !== null)
                                            <a href="https://{{$item->twitter}}">
                                                <i class="g-font-size-30--xs g-color--white-opacity g-margin-b-30--xs g-padding-x-15--xs ti-twitter"></i>
                                            </a> 
                                            @endif 
                                        </div>
                                        @endforeach
                                    </div>
									<div class="col-xs-4 g-text-right--xs">
										<p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light">
											<a href="http://keenthemes.com/preview/Megakit/">Megakit</a> Theme Powered by:
											<a href="http://www.keenthemes.com/">KeenThemes.com</a>
										</p>
									</div>
								</div>
							</div>
							<!-- End Copyright -->
						</footer>
					</div>
				</div>
			</div>
		<!-- End Portfolio -->
		<!-- Back To Top -->
		<a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>
		<div class="icon">
			<a href="https://wa.me/{{$item->phone}}">
				<img class="img-fluid wow pulse"  data-wow-iteration="infinite" data-wow-duration="1s" src="{{asset('megakit/img/whatsapp.png')}}" alt="" width="50px">
			</a> 
		</div>
			
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
