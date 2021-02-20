			<!-- Overlay -->
			<div class="s-header-bg-overlay js__bg-overlay">
				<!-- Nav -->
				<nav class="s-header__nav js__scrollbar">
					<div class="container-fluid">
						<!-- Menu List -->
						<ul class="list-unstyled s-header__nav-menu">
							<li class="s-header__nav-menu-item">
								<a class="s-header__nav-menu-link s-header__nav-menu-link-divider " href="{{url('/')}}">Home</a>
							</li>
							<li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{url('/about')}}">About Us</a></li>
							<li class="s-header__nav-menu-item">
								<a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{url('/product')}}">Product</a>
							</li>
							<li class="s-header__nav-menu-item">
								<a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{url('/team')}}">Team</a>
							</li>
							<li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="{{url('/contact')}}">Contact</a></li>
						</ul>
						<!-- End Menu List -->
					</div>
				</nav>
				<!-- End Nav -->
				<!-- Action -->
                @foreach ($contact as $item)
                    

				<ul class="list-inline s-header__action s-header__action--rb">
					<li class="s-header__action-item">
						<a class="s-header__action-link" href="https://{{$item->fb}}">
							<i class="g-padding-r-5--xs ti-facebook"></i>
							<span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
						</a>
					</li>
					<li class="s-header__action-item">
						<a class="s-header__action-link" href="https://{{$item->ig}}">
							<i class="g-padding-r-5--xs ti-instagram"></i>
							<span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
						</a>
					</li>
					<li class="s-header__action-item">
						<a class="s-header__action-link" href="mailto:{{$item->email}}">
							<i class="g-padding-r-5--xs ti-email"></i>
							<span class="g-display-none--xs g-display-inline-block--sm">Email</span>
						</a>
					</li>
					<li class="s-header__action-item">
						<a class="s-header__action-link" href="tel:{{$item->phone}}">
							<i class="g-padding-r-5--xs ti-mobile"></i>
							<span class="g-display-none--xs g-display-inline-block--sm">Phone</span>
						</a>
					</li>
					<li class="s-header__action-item">
						<a class="s-header__action-link" href="https://{{$item->twitter}}">
							<i class="g-padding-r-5--xs ti-twitter"></i>
							<span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
						</a>
					</li>
				</ul>

                @endforeach
				<!-- End Action -->
			</div>
			<!-- End Overlay -->
		</header>