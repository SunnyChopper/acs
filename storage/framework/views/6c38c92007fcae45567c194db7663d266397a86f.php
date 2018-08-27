<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('layouts.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="grey-box">
					<form class="p-4" action="/business/update/profile" method="post">
						<?php echo e(csrf_field()); ?>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-8">
							<h3 class="text-center">Update Profile</h3>
							<hr />
						</div>
					
						<input type="hidden" value="<?php echo e($business->id); ?>" name="business_id">
						<div class="form-group">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-8">
									<label>Business Name:</label>
									<input type="text" name="name" class="form-control" value="<?php echo e($business->name); ?>" required>
								</div>
							</div>
						</div>
					
						<div class="form-group">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-8">
									<label>Website:</label>
									<input type="url" name="website" class="form-control" value="<?php echo e($business->website); ?>" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-8">
									<label>Email:</label>
									<input type="email" name="email" class="form-control" value="<?php echo e($business->email); ?>" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-8">
									<label>Email:</label>
									<input type="text" name="ohone" class="form-control" value="<?php echo e($business->phone); ?>" required>
								</div>
							</div>
						</div>
					
						<div class="form-group">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<label>City:</label>
									<input type="text" name="city" class="form-control" value="<?php echo e($business->city); ?>" required>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<label>State:</label>
									<input type="text" name="state" class="form-control" value="<?php echo e($business->state); ?>" required>
								</div>

								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<label>Zipcode:</label>
									<input type="text" name="zipcode" class="form-control" value="<?php echo e($business->zipcode); ?>" required>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<p class="text-center">Contact us to update your insurance expiration date.</p>
								</div>
							</div>
						</div>

						<?php if($errors->any()): ?>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									    <p class="text-center red"><?php echo e($errors->all()[0]); ?></p>
									</div>
								</div>
							</div>
						<?php endif; ?>

						<?php if(session()->has('success')): ?>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									    <p class="text-center green"><?php echo e(session()->get('success')); ?></p>
									</div>
								</div>
							</div>
						<?php endif; ?>

						

						<div class="row">
							<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-xs-12">
								<input type="submit" value="Update" class="primary-btn" style="width: 100%;">
							</div>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<h3>Your Subscription</h3>
				<hr />
				<?php if($membership->trial == 1): ?>
					<p>Your subscription is currently in its trial period!</p>
					<p>You have <b><?php echo e($trial_diff->format('%a days')); ?></b> left in your trial period.</p>
					<a href="/business/confirm/cancel" class="btn btn-danger">Cancel Trial</a>
				<?php else: ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>