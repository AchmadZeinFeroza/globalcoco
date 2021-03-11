@extends('user.layout.master')
@section('content')
        <!--========== SWIPER SLIDER ==========-->
		<div class="s-swiper js__swiper-one-item">
			<!-- Swiper Wrapper -->
			<div class="swiper-wrapper">
				@foreach ($data as $item)
				@if ($item->id === 1)
				<div class="g-fullheight--xs g-bg-position--center swiper-slide s-promo-block-v4 js__parallax-window" style="background: url('{{asset($item->image)}}')">
					<div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
						<div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
							<h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">{{$item->title}}</h1>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
								<div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s"></div>
								<div class="row">
									<div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
										<div class="wow fadeInLeft animated" data-wow-duration=".3" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                            <span class="s-promo-block-v3__date g-font-size-30--xs g-font-size-30--lg g-font-weight--300 g-color--white">{{$item->description}}</span>
                                        </div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="clearfix">
											<a href="{{url('/about')}}" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">About Us</a>
										</div>
									</div>
								</div>
							</div>
							@foreach ($contact as $item)
							<div class="col-sm-4 col-sm-pull-8">
								<div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
									<a class="js__popup__youtube" href="{{$item->yt}}" title="Intro Video">
										<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
										<span class="text-uppercase g-font-size-13--xs g-color--white g-padding-x-15--xs">Watch the Overview</span>
									</a>
								</div>
							</div>
							@endforeach
						</div>
					</div>
				</div>
				@endif
				@if ($item->id === 2)
				<div class="g-fullheight--xs g-bg-position--center swiper-slide s-promo-block-v4 js__parallax-window" style="background: url('{{asset($item->image)}}')">
					<div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
						<div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
							<h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">{{$item->title}}</h1>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
								<div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md"></div>
								<div class="row">
									<div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
										<div class="wow fadeInLeft animated" data-wow-duration=".3" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                            <span class="s-promo-block-v3__date g-font-size-30--xs g-font-size-30--lg g-font-weight--300 g-color--white">{{$item->description}}</span>
                                        </div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="clearfix">
											<a href="{{url('/about')}}" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">About Us</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-sm-pull-8">
								<div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
									<a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
										<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
										<span class="text-uppercase g-font-size-13--xs g-color--white g-padding-x-15--xs">Watch the Overview</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
				@if ($item->id === 3)
				<div class="g-fullheight--xs g-bg-position--center swiper-slide s-promo-block-v4 js__parallax-window" style="background: url('{{asset($item->image)}}')">
					<div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
						<div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
							<h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">{{$item->title}}</h1>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
								<div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md"></div>
								<div class="row">
									<div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
										<div class="wow fadeInLeft animated" data-wow-duration=".3" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                            <span class="s-promo-block-v3__date g-font-size-30--xs g-font-size-30--lg g-font-weight--300 g-color--white">{{$item->description}}</span>
                                        </div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="clearfix">
											<a href="{{url('/about')}}" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">About Us</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-sm-pull-8">
								<div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
									<a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
										<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
										<span class="text-uppercase g-font-size-13--xs g-color--white g-padding-x-15--xs">Watch the Overview</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
				@if ($item->id === 4)
				<div class="g-fullheight--xs g-bg-position--center swiper-slide s-promo-block-v4 js__parallax-window" style="background: url('{{asset($item->image)}}')">
					<div class="container g-ver-center--sm g-padding-y-125--xs g-padding-y-0--sm">
						<div class="g-margin-t-30--xs g-margin-t-0--sm g-margin-b-30--xs g-margin-b-70--md">
							<h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-50--lg g-color--white">{{$item->title}}</h1>
						</div>
						<div class="row">
							<div class="col-sm-8 col-sm-push-4 g-margin-b-50--xs g-margin-b-0--md">
								<div class="s-promo-block-v3__divider g-display-none--xs g-display-block--md"></div>
								<div class="row">
									<div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
										<div class="wow fadeInLeft animated" data-wow-duration=".3" data-wow-delay=".3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                            <span class="s-promo-block-v3__date g-font-size-30--xs g-font-size-30--lg g-font-weight--300 g-color--white">{{$item->description}}</span>
                                        </div>
									</div>
									<div class="col-sm-5 col-sm-offset-1">
										<div class="clearfix">
											<a href="{{url('/about')}}" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">About Us</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-sm-pull-8">
								<div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".5s">
									<a class="js__popup__youtube" href="https://www.youtube.com/watch?v=lcFYdgZKZxY" title="Intro Video">
										<i class="s-icon s-icon--lg s-icon--white-bg g-radius--circle ti-control-play"></i>
										<span class="text-uppercase g-font-size-13--xs g-color--white g-padding-x-15--xs">Watch the Overview</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
			<!-- End Swiper Wrapper -->

			<!-- Arrows -->
			<a
				href="javascript:void(0);"
				class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"
			></a>
			<a
				href="javascript:void(0);"
				class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"
			></a>
			<!-- End Arrows -->

			<a href="#js__scroll-to-section" class="s-scroll-to-section-v1--bc g-margin-b-15--xs">
				<span class="g-font-size-18--xs g-color--white ti-angle-double-down"></span>
				<p class="text-uppercase g-color--white g-letter-spacing--3 g-margin-b-0--xs">Learn More</p>
			</a>
		</div>
		<!--========== END SWIPER SLIDER ==========-->

		<!--========== PAGE CONTENT ==========-->
		<!-- Features -->
		<div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
			<div class="g-text-center--xs g-margin-b-100--xs">
				<p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Welcome to Global Coco Indonesia</p>
			</div>
			<div class="row g-margin-b-60--xs g-margin-b-70--md ">
				@foreach ($service as $item)
				@if ($item->id === 1 )
				<div class="col-sm-3 g-margin-b-60--xs g-margin-b-0--md wow bounceInLeft" data-wow-iteration="1" data-wow-duration="3s" >
					<div class="clearfix">
						<div class="g-media g-width-30--xs">
							<div >
								<i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
							</div>
						</div>
						<div class="g-media__body g-padding-x-20--xs">
							<h3 class="g-font-size-18--xs">{{$item->title}}</h3>
							<p class="g-margin-b-0--xs">{{$item->description}}</p>
						</div>
					</div>
				</div>
				@endif
				@if ($item->id === 2 )
				<div class="col-sm-3 g-margin-b-60--xs g-margin-b-0--md wow bounceInDown" data-wow-iteration="1" data-wow-duration="3s" >
					<div class="clearfix">
						<div class="g-media g-width-30--xs">
							<div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
								<i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
							</div>
						</div>
						<div class="g-media__body g-padding-x-20--xs">
							<h3 class="g-font-size-18--xs">{{$item->title}}</h3>
							<p class="g-margin-b-0--xs">{{$item->description}}</p>
						</div>
					</div>
				</div>
				@endif
				@if ($item->id === 3 )
				<div class="col-sm-3 g-margin-b-60--xs g-margin-b-0--md wow bounceInUp" data-wow-iteration="1" data-wow-duration="3s" >
					<div class="clearfix">
						<div class="g-media g-width-30--xs">
							<div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
								<i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
							</div>
						</div>
						<div class="g-media__body g-padding-x-20--xs">
							<h3 class="g-font-size-18--xs">{{$item->title}}</h3>
							<p class="g-margin-b-0--xs">{{$item->description}}</p>
						</div>
					</div>
				</div>
				@endif
				@if ($item->id === 4 )
				<div class="col-sm-3 g-margin-b-60--xs g-margin-b-0--md wow bounceInRight" data-wow-iteration="1" data-wow-duration="3s" >
					<div class="clearfix">
						<div class="g-media g-width-30--xs">
							<div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
								<i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
							</div>
						</div>
						<div class="g-media__body g-padding-x-20--xs">
							<h3 class="g-font-size-18--xs">{{$item->title}}</h3>
							<p class="g-margin-b-0--xs">{{$item->description}}</p>
						</div>
					</div>
				</div>		
				@endif		
				@endforeach
			</div>
		</div>
		<!-- End Features -->

		<!-- Culture -->
		<div class="container">
			@foreach ($about as $item)
			<div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
				<div class="col-sm-5 col-xs-12 g-hor-centered-row__col  g-margin-b-60--xs ">
					<div class="wow fadeInLeft text-center " data-wow-duration=".3" data-wow-delay=".1s">
						<img class="img-responsive" src="{{asset($item->image)}}" alt="Image" />
					</div>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-7 col-xs-12 g-hor-centered-row__col">
					<p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Global Coco</p>
					<h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">About Event</h2>
					<p class="g-font-size-18--sm">
						{!!$item->description!!}
					</p>
				</div>
			</div>
			@endforeach
		</div>
		<!-- End Culture -->

		<!-- News -->
		<div class="container g-padding-y-80--xs g-padding-y-125--sm">
			<div class="row">
				@php $j=1; @endphp
				@foreach ($benefit as $item)
				<div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md wow fadeInUp" data-wow-duration=".3" data-wow-delay=".{{$j}}s">
					<!-- News -->
					<article>
						<img class="img-responsive " src="{{asset($item->image)}}" alt="Image" />
						<div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
							<p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2">{{$item->title}}</p>
							<p>{{$item->description}}</p>
						</div>
					</article>
					<!-- End News -->
				</div>
				@php $j++; @endphp
				@endforeach
			</div>
		</div>
		<!-- End News -->
		<!-- Testimonials -->
		<div class="s-promo-block-v2 js__parallax-window" style="background: url({{asset('megakit/img/bg-2.jpg')}}) 50% 0 no-repeat fixed">
			<div class="container g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
				<p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-50--xs">Testimonials</p>
				<div class="s-swiper js__swiper-testimonials">
					<!-- Swiper Wrapper -->
					<div class="swiper-wrapper g-margin-b-50--xs">
						@foreach ($clients as $item)
						<div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
							<div class="g-padding-x-20--xs g-padding-x-50--lg">
								<div class="g-margin-b-40--xs">
									<p class="g-font-size-22--xs g-font-size-28--sm g-color--white">
										<i
											>{{$item->description}}</i
										>
									</p>
								</div>
								<div class="center-block g-hor-divider__solid--white-opacity-lightest g-width-100--xs g-margin-b-30--xs"></div>
								<h4 class="g-font-size-15--xs g-font-size-18--sm g-color--white-opacity-light g-margin-b-5--xs">{{$item->name}} / {{$item->company}}</h4>
							</div>
						</div>
						@endforeach
					</div>
					<!-- End Swipper Wrapper -->

					<!-- Arrows -->
					<div class="g-font-size-22--xs g-color--white-opacity js__swiper-fraction"></div>
					<a
						href="javascript:void(0);"
						class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"
					></a>
					<a
						href="javascript:void(0);"
						class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"
					></a>
					<!-- End Arrows -->
				</div>
			</div>
		</div>
		<!-- End Testimonials -->
        @endsection