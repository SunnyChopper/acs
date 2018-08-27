<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.home-banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container mt-64 mb-64">
    	<div class="row">
    		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    			<h2 class="text-center">Are You a Shipping Company?</h2>
    			<hr />
    			<p class="text-center">Do you own a car shipping service and would like to get more customers to your business? Having trouble with marketing your services? We can help.</p>
    		</div>
    	</div>

    	<div class="row mt-16 mb-16">
    		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    			<div class="feature-box">
    				<h3 class="text-center">Consistent Leads to You</h3>
    				<p class="text-center">Get a consistent stream of leads to your business as we send potential customers your way.</p>
    			</div>
    		</div>

    		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    			<div class="feature-box">
    				<h3 class="text-center">Marketing Done for You</h3>
    				<p class="text-center">We'll market and find the right customers whle you focus on providing the best customer experience.</p>
    			</div>
    		</div>

    		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    			<div class="feature-box">
    				<h3 class="text-center">Increased Revenue</h3>
    				<p class="text-center">As you get more attention and more leads, your revenue numbers will also go up as you grow your business.</p>
    			</div>
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-lg-2 offset-lg-5 col-md-4 offset-md-4 col-sm-8 offset-sm-2 col-xs-12">
    			<a href="/packages" class="btn btn-primary" style="display: inline-block; margin-left: auto; margin-right: auto; width: 100%;s">Get Started!</a>
    		</div>
    	</div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>