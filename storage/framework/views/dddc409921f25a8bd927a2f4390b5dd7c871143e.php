<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('modals.create_listing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('modals.delete_listing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('layouts.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h3>Manage Your Listings</h3>
				<?php if(count($listings) != 0): ?>
					<button type="button" class="btn btn-primary btn-sm mt-2" data-toggle="modal" data-target="#create_listing_modal">Create New Listing</button>
				<?php endif; ?>
			</div>
		</div>

		<div class="row mt-16">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php if(count($listings) == 0): ?>
					<div class="jumbotron">
						<p class="text-center">Seems like you do not have any active listings. Click on the button below to get started.</p>
						<button type="button" class="btn btn-primary center-button" data-toggle="modal" data-target="#create_listing_modal">Create a Listing</button>
					</div>
				<?php else: ?>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Display Name</th>
								<th>Date of Shipment</th>
								<th>Origin</th>
								<th>Destination</th>
								<th>Vehicle</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($listing->first_name); ?> <?php echo e($listing->last_name); ?></td>
									<td><?php echo e($listing->date_of_shipping); ?></td>
									<td><?php echo e($listing->origin_city); ?>, <?php echo e($listing->origin_state); ?></td>
									<td><?php echo e($listing->destination_city); ?>, <?php echo e($listing->destination_state); ?></td>
									<td><?php echo e($listing->vehicle_year); ?> <?php echo e($listing->vehicle_make); ?> <?php echo e($listing->vehicle_model); ?></td>
									<td>
										<a href="/members/listings/edit/<?php echo e($listing->id); ?>" class="btn btn-warning">Edit</a>
										<button id="<?php echo e($listing->id); ?>" class="btn btn-danger" onclick="showDeleteListingModal(this.id);">Delete</button>
									</td>
								</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>