@extends('user.layout.master')
@section('content')
        <!--========== PROMO BLOCK ==========-->
        <div class="g-bg-position--center s-promo-block-v4 js__parallax-window " style="background: url({{asset('megakit/img/bg-2.jpg')}}) 50% 0 no-repeat fixed">
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">
                    Our Product
                </p>
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">GLOBAL COCO</h1>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->
        <!-- Mockup -->
        @php $j=1;@endphp

		<div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--xsm">
            @foreach ($data as $item)
            @if ($j%2 === 0)
			<div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-80--xs g-margin-b-100--md wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
				<div class="col-sm-5 g-hor-centered-row__col g-text-left--xs g-text-right--md">
					<h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">{{$item->title}}</h2>
					<p class="g-font-size-18--sm">
						{{$item->description}}
					</p>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-5 g-hor-centered-row__col">
					<img class="img-responsive" src="{{asset($item->image)}}" alt="Mockup Image" />
				</div>
			</div>
            @else
			<div class="row g-hor-centered-row--md g-row-col--5 wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
				<div class="col-sm-5 col-sm-push-7 g-hor-centered-row__col">
					<h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">{{$item->title}}</h2>
					<p class="g-font-size-18--sm">
						{{$item->description}}
					</p>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-5 col-sm-pull-7 g-hor-centered-row__col g-text-left--xs g-text-right--md">
					<img class="img-responsive" src="{{asset($item->image)}}" alt="Mockup Image" />
				</div>
			</div>
            @endif
            @php $j++; @endphp
		</div>
        @endforeach
		<!-- Speakers -->
		<div class="g-padding-y-80--xs g-padding-y-125--sm">
			<div class="row g-overflow--hidden">
				<h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs text-center g-padding-y-125--sm">we provide Indonesian herbs and spices</h2>
				@foreach ($rempah as $item)

				<div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
					<!-- Speaker -->
					<div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-600--lg">
						<img class="img-responsive g-width-100-percent--xs" src="{{asset($item->image)}}" alt="Image" />
					</div>
					<!-- End Speaker -->
				</div>
									
				@endforeach
			</div>
		</div>
		<!-- End Speakers -->

		<div class="col-md-12">
			<div class="row g-overflow--hidden">
				<h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs text-center g-padding-y-125--sm">Specifitcation</h2>
				<img class="img-responsive g-width-100-percent--xs" src="{{asset('megakit/img/spesifikasi.png')}}" alt="Image" />
		</div>

		{{-- <div class="row">
				<div class="container">
					@foreach ($rempah as $item)
					<div class="card bg-dark text-white col-md-">
						<img class="card-img" src="{{asset($item->image)}}" alt="Card image">
					</div>
					@endforeach
				</div>
		</div> --}}

		<!-- End Mockup -->
@endsection