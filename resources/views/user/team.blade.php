@extends('user.layout.master')
@section('content')
    <!--========== PROMO BLOCK ==========-->
    <div class="g-bg-position--center s-promo-block-v4 js__parallax-window " style="background: url({{asset('megakit/img/bg-3.jpg')}}) 50% 0 no-repeat fixed">
        <div class="g-container--md g-text-center--xs g-padding-y-150--xs wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">
                Our Team
            </p>
            <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">GLOBAL COCO</h1>
        </div>
    </div>
    <!--========== END PROMO BLOCK ==========-->

		<!--========== PAGE CONTENT ==========-->
		<!-- Speakers -->
		<div class="container g-padding-y-80--xs g-padding-y-125--sm">
			<div class="row g-overflow--hidden">
                @foreach ($data as $item)
                    

				<div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
					<!-- Speaker -->
					<div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
						<img class="img-responsive g-width-100-percent--xs" src="{{asset($item->image)}}" alt="Image" />
						<div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
							<div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
								<h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">{{$item->name}}</h4>
							</div>
							<p class="g-font-weight--700">{{$item->job}}</p>
							<p>
								{{$item->description}}
							</p>
						</div>
					</div>
					<!-- End Speaker -->
				</div>

                @endforeach
			</div>
		</div>
		<!-- End Speakers -->

        @endsection