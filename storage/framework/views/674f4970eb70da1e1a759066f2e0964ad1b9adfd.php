<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('modals.delete_review', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->make('layouts.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4>Your Reviews</h4>
				<hr />
			</div>
		</div>

		<?php if(count($review_array) != 0): ?>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Business Name</th>
							<th>Title</th>
							<th>Stars</th>
							<th>Description</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $review_array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($review[0]); ?></td>
								<td><?php echo e($review[1]->title); ?></td>
								<td><?php echo e($review[1]->stars); ?></td>
								<td><?php echo e($review[1]->description); ?></td>
								<td>
									<button id="<?php echo e($review[1]->id); ?>" onclick="showDeleteReviewModal(this.id);" class="btn btn-sm btn-danger">Delete</button>
								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
		</div>
		<?php else: ?>
		<div class="row mt-16">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="jumbotron">
					<p class="text-center">You have not made any reviews yet...you may do so by searching for a business and clicking on 'Leave a Review'</p>
				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>