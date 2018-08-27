<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('layouts.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2 class="text-center mb-64">How We Can Help Your Business</h2>
				
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3 class="text-center">Benefit 1</h3>
				<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3 style="text-align: center;">Benefit 2</h3>
				<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h3 style="text-align: center;">Benefit 3</h3>
				<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div>
		</div>
	</div>

	<div class="grey-row p-16">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="pricing-table">
						<h3>Yearly</h3>
						<h4 style="margin-top: 4px; color: black;">$119.99 billed annually</h4>
						<h4>$9.95/<small>month</small></h4>
						<a href="/checkout/Yearly">Get Started</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="pricing-table">
						<h3>6 Months</h3>
						<h4 style="margin-top: 4px; color: black;">$89.99 billed every 6 months</h4>
						<h4>$14.95/<small>month</small></h4>
						<a href="/checkout/6+Months">Get Started</a>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="pricing-table">
						<h3>Monthly</h3>
						<h4 style="margin-top: 4px; color: black;">$18.85 billed every 1 month</h4>
						<h4>$18.95/<small>month</small></h4>
						<a href="/checkout/Monthly">Get Started</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row mt-32 mb-32">
			<div class="col-lg-2 offset-lg-5 col-md-2 offset-md-5 col-sm-4 offset-sm-4 col-xs-4 offset-xs-4">
				<img src="https://stickeroid.com/uploads/pic/full-pngmart/390802b3cc9fbf2a32cb6fe6a74f86277ab83af8.png" class="full-width-img">
				<img src="https://cdn.shopify.com/s/files/1/1869/5229/t/3/assets/ssl-secure.png?5946868541510731747" class="full-width-img">
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>