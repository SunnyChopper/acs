<?php $__env->startSection('content'); ?>
	<?php if(!Auth::guest()): ?>
	<?php echo $__env->make('modals.create_listing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php endif; ?>
	<?php echo $__env->make('layouts.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2>Listings</h2>
				<?php if(Auth::guest()): ?>
				<p class="mb-4">You must signup as a member before you can create a listing. Click the button below to register.</p>
				<a href="/members/register/" class="btn btn-primary">Signup</a>
				<?php else: ?>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_listing_modal">Create a Listing</button>
				<?php endif; ?>
				<hr />
			</div>
		</div>

		<div class="row">
			<?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="listings-box">
						<h3><?php echo e($listing->first_name); ?></h3>
						<p class="mt-4 mb-0"><b>Email:</b> Hidden</p>
						<p class="mt-0 mb-0"><b>Phone:</b> Hidden</p>
						<p class="mt-0 mb-0"><b>Origin City:</b> <?php echo e($listing->origin_city); ?></p>
						<p class="mt-0 mb-0"><b>Origin State:</b> <?php echo e($listing->origin_state); ?></p>
						<p class="mt-0 mb-0"><b>Destination City:</b> <?php echo e($listing->destination_city); ?></p>
						<p class="mt-0 mb-0"><b>Destination State:</b> <?php echo e($listing->destination_state); ?></p>
						<p class="mt-0 mb-0"><b>Vehicle Year:</b> Hidden</p>
						<p class="mt-0 mb-0"><b>Vehicle Make:</b> <?php echo e($listing->vehicle_make); ?></p>
						<p class="mt-0 mb-0"><b>Vehicle Model:</b> <?php echo e($listing->vehicle_model); ?></p>
					</div>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		<div class="row mt-16">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php echo e($listings->links()); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>