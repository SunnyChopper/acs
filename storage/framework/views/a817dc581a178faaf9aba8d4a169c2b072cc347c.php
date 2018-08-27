<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('layouts.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2>Should I Go Direct or Through A Broker?</h2>
				<p>There are many advantages to either choosing direct or going through a broker. Here are some pros and cons for each and how they differ from each other.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="feature-box">
					<h3 class="text-center">Direct</h3>
					<hr />
					<ul class="text-center padded-list">
						<li>You want to have complete control of the process from A to Z</li>
						<li>Have the time and ability to negotiate your price</li>
						<li>Bypass the middleman</li>
						<li>Avoid broker fees</li>
						<li>Avoid “pick up windows” and know when your car will be loaded</li>
						<li>Communicate directly with the carrier transporting your car</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="feature-box">
					<h3 class="text-center">Broker</h3>
					<hr />
					<ul class="text-center padded-list">
						<li>Simply put, your employing someone else to do the work for you</li>
						<li>Buffer between you and the carrier</li>
						<li>Dedicated agent working on your order</li>
						<li>Customer service</li>
						<li>Market knowledge</li>
						<li>Save time</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>