<header id="header">
	<div class="header-top">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-sm-6 col-6 header-top-left">
					<?php if(Session::has('logged_in')): ?>
						<?php if(Session::get('logged_in') == true): ?>
						<ul>
							<li><a href="/business/logout">Carrier Logout</a></li>
						</ul>
						<?php else: ?>
						<ul>
							<li><a href="/business/login">Carrier Login</a></li>
						</ul>
						<?php endif; ?>
					<?php else: ?>
					<ul>
						<li><a href="/business/login">Carrier Login</a></li>
					</ul>
					<?php endif; ?>	
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
				<a href="/"><img src="<?php echo e(URL::asset('img/logo.png')); ?>" alt="" title="" /></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu">
					<?php if(Session::has('logged_in')): ?>
						<?php if(Session::get('logged_in') == true): ?>
							<li><a href="/business/dashboard/">Dashboard</a></li>
							<li><a href="/business/listings">Access Listings</a></li>
							<li><a href="/contact">Contact</a></li>
						<?php else: ?>
							<?php if(Auth::guest()): ?>
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
							<?php else: ?>
								<li><a href="/">Home</a></li>
								<li><a href="/members/dashboard/">Dashboard</a></li>
								<li><a href="/members/reviews/">Reviews</a></li>
								<li><a href="/contact">Contact</a></li>
								<li><a href="/members/logout/">Logout</a></li>
							<?php endif; ?>
						<?php endif; ?>
					<?php else: ?>
						<?php if(Auth::guest()): ?>
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
						<?php else: ?>
							<li><a href="/">Home</a></li>
							<li><a href="/members/dashboard/">Dashboard</a></li>
							<li><a href="/members/reviews/">Reviews</a></li>
							<li><a href="/contact">Contact</a></li>
							<li><a href="/members/logout/">Logout</a></li>
						<?php endif; ?>
					<?php endif; ?>
				  
					
				</ul>
			</nav><!-- #nav-menu-container -->
		</div>
	</div>
</header><!-- #header -->