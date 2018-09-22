<header id="header">
	<div class="header-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-sm-6 col-6 header-top-left">
					@if(Session::has('logged_in'))
						@if(Session::get('logged_in') == true)
						<ul>
							<li><a href="/business/logout">Carrier Logout</a></li>
						</ul>
						@else
						<ul>
							<li><a href="/business/login">Carrier Login</a></li>
						</ul>
						@endif
					@else
					<ul>
						<li><a href="/business/login">Carrier Login</a></li>
					</ul>
					@endif	
				</div>
				<div class="col-lg-6 col-sm-6 col-6 header-top-right">
					<div class="header-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>  					
		</div>
	</div>
	<div class="container main-menu">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="/"><img src="{{ URL::asset('img/logo.png') }}" alt="" title="" style="height: 45px;" /></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					@if(Session::has('logged_in'))
						@if(Session::get('logged_in') == true)
							<li><a href="/business/dashboard/">Dashboard</a></li>
							<li><a href="/business/listings">Access Listings</a></li>
							<li><a href="/contact">Contact</a></li>
						@else
							@if(Auth::guest())
								<li><a href="/">Home</a></li>
								<li><a href="/listings">Post My Vehicle</a></li>
								<li><a href="/reviews">Reviews</a>
								<li><a href="/faq">FAQ</a></li>
								<li><a href="/direct">Why Direct</a></li>
								<li><a href="/services">Services</a></li>
								<li><a href="/contact">Contact</a></li>
								<li><a href="">Members</a>
									<ul>
										<li><a href="/members/login/">Login</a></li>
										<li><a href="/members/register/">Register</a></li>
									</ul>
								</li>
							@else
								<li><a href="/">Home</a></li>
								<li><a href="/members/dashboard/">Dashboard</a></li>
								<li><a href="/members/reviews/">Reviews</a></li>
								<li><a href="/contact">Contact</a></li>
								<li><a href="/members/logout/">Logout</a></li>
							@endif
						@endif
					@else
						@if(Auth::guest())
							<li><a href="/">Home</a></li>
							<li><a href="/listings">Post My Vehicle</a></li>
							<li><a href="/reviews">Reviews</a>
							<li><a href="/faq">FAQ</a></li>
							<li><a href="/direct">Why Direct</a></li>
							<li><a href="/services">Services</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="">Members</a>
								<ul>
									<li><a href="/members/login/">Login</a></li>
									<li><a href="/members/register/">Register</a></li>
								</ul>
							</li>
						@else
							<li><a href="/">Home</a></li>
							<li><a href="/members/dashboard/">Dashboard</a></li>
							<li><a href="/members/reviews/">Reviews</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="/members/logout/">Logout</a></li>
						@endif
					@endif
				  
					{{-- <li class="menu-has-children"><a href="">Blog</a>
					<ul>
					  <li><a href="blog-home.html">Blog Home</a></li>
					  <li><a href="blog-single.html">Blog Single</a></li>
					</ul>
					</li>	 --}}
				</ul>
			</nav><!-- #nav-menu-container -->
		</div>
	</div>
</header><!-- #header -->