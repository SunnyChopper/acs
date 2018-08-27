<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('layouts.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Requested Shipment Date</th>
							<th>Origin</th>
							<th>Destination</th>
							<th>Vehicle</th>
							<th>Contact</th>
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
									<a href="mailto:<?php echo e($listing->email); ?>" class="btn btn-sm btn-primary">Email</a>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="row mt-16">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php echo e($listings->links()); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>