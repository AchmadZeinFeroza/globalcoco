@extends('user.layout.master')
@section('content')
<!--========== PROMO BLOCK ==========-->
<div class="g-bg-position--center s-promo-block-v4 js__parallax-window " style="background: url({{asset('megakit/img/bg-2.jpg')}}) 50% 0 no-repeat fixed">
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">
                    Gallery
                </p>
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">GLOBAL COCO</h1>
            </div>
        </div>
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs ">
			<div class="g-text-center--xs ">
				<h1 class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 ">Galeri Global COco</h1>
			</div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="container"> 
           @foreach ($data as $item)
           <div class="col-sm-4 wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s" style="height: 200px;overflow: hidden;">
               <!-- Portfolio Gallery -->
               <div id="js__grid-portfolio-gallery" class="s-portfolio__paginations-v1 cbp">
                   <!-- Item -->
                   <div class="s-portfolio__item cbp-item">
                       <div class="s-portfolio__img-effect">
                           <img src="{{asset($item->image)}}" class="thumb" alt="Portfolio Image" />
                       </div>
                       <div class="s-portfolio__caption-hover--cc">
						<ul class="list-inline g-ul-li-lr-5--xs g-margin-b-0--xs">
							<li>
								<a
									href="{{asset($item->image)}}"
									class="cbp-lightbox s-icon s-icon--sm s-icon--white-bg g-radius--circle"
								>
									<i class="ti-fullscreen"></i>
								</a>
							</li>
						</ul>
					</div>
                   </div>
                   <!-- End Item -->
               </div>
               <!-- End Portfolio Gallery -->
           </div>
           @endforeach
                                
        </div>     
        </div>
       </div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('megakit/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js')}}"></script>
<script type="text/javascript" src="{{asset('megakit/js/components/portfolio-3-col.min.js')}}"></script>

@endsection