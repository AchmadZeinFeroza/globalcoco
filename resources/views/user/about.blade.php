@extends('user.layout.master')
@section('content')
		<!--========== PROMO BLOCK ==========-->
		<div class="g-bg-position--center s-promo-block-v4 js__parallax-window " style="background: url({{asset('megakit/img/bg.jpg')}}) 50% 0 no-repeat fixed">
			<div class="g-container--md g-text-center--xs g-padding-y-150--xs wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
				<p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">
					About Me
				</p>
				<h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">GLOBAL COCO</h1>
			</div>
		</div>
		<!--========== END PROMO BLOCK ==========-->
		<!--========== PAGE CONTENT ==========-->
		<!-- About -->
		<div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm g-margin-b-25--xs">
			<div class="row g-hor-centered-row--md">
				@foreach ($about as $item)
				<div class="col-md-8 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
					<div class="g-width-100-percent--xs g-width-400--md g-margin-b-40--xs wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
						<h2 class="g-font-size-32--xs g-font-size-36--md g-font-family--playfair g-margin-b-20--xs">About <br />Global Coco Indonesia</h2>
						<p class="g-font-size-16--sm">
							{!!$item->description!!}
						</p>
					</div>
					@endforeach
					<div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".5s">
						<div class="g-position--overlay g-text-left--xs g-text-right--md g-margin-t-o-50--lg">
							<span
								class="text-uppercase g-display-block--xs g-font-size-34--xs g-font-size-40--sm g-font-size-50--lg g-font-weight--700 g-font-family--playfair g-color--primary g-line-height--xs"
								>GLOBAL</span
							>
							<span
								class="text-uppercase g-display-block--xs g-font-size-34--xs g-font-size-40--sm g-font-size-50--lg g-font-weight--700 g-font-family--playfair g-color--primary g-line-height--xs"
								>COCO</span
							>
							<p class="g-font-size-18--xs g-font-size-20--lg">INDONESIA</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-xs-6 col-xs-offset-3 g-full-width--xs g-full-width-offset-0--xs g-hor-centered-row__col">
					<div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
						<img class="img-responsive" src="{{asset($item->image)}}" alt="Image" />
					</div>
				</div>
			</div>
		</div>
		<!-- End About -->
		<!-- Portfolio -->
		@foreach ($data as $item)
		<div class="" style="overflow: hidden;">
			<div class="row">
				<div class="col-sm-12">
					<!-- Portfolio Gallery -->
					<div id="js__grid-portfolio-gallery" class="s-portfolio__paginations-v1 cbp">
						<!-- Item -->
						<div class="s-portfolio__item cbp-item motion graphic">
							<div class="s-portfolio__img-effect">
								<img src="{{asset($item->image)}}" class="thumb" alt="Portfolio Image" />
							</div>
							<div class="s-portfolio__caption-hover--cc" style="top: 50%">
								<h3 class="g-font-size-18--xs g-color--white g-margin-b-5--xs">{{$item->title}}</h3>
								<p class="g-color--white-opacity">{{$item->description}}</p>
							</div>
						</div>
						<!-- End Item -->
					</div>
					<!-- End Portfolio Gallery -->
				</div>
			</div>
		</div>
		<br>
		@endforeach
		<br><br>
	@endsection
