<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('layouts.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h3 class="text-center">Payment Complete!</h3>
				<p class="text-center">Now create your business profile so you can connect with customers and control what gets displayed publicly!</p>
				<hr />
			</div>
		</div>

		<div class="row mt-16">
			<div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-sm-12 col-xs-12">
				<form action="/checkout/register/business" method="POST">
					<?php echo csrf_field(); ?>
					<input type="hidden" name="package_id" value="<?php echo e($package_id); ?>"> 
					<div class="grey-box">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Business Name<span class="red">*</span>:</label>
									<input type="text" class="form-control" name="name" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Website<span class="red">*</span>:</label>
									<input type="url" class="form-control" name="website" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Email<span class="red">*</span>:</label>
									<input type="email" class="form-control" name="email" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Insurance Expiration Date<span class="red">*</span>:</label>
									<input type="date" class="form-control" name="insurance_expiration_date" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Username<span class="red">*</span>:</label>
									<input type="text" class="form-control" name="username" required>
								</div>
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Password<span class="red">*</span>:</label>
									<input type="password" class="form-control" name="password" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>City<span class="red">*</span>:</label>
									<input type="text" class="form-control" name="city" required>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>State<span class="red">*</span>:</label>
									<input type="text" class="form-control" name="state" required>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Zipcode<span class="red">*</span>:</label>
									<input type="text" class="form-control" name="zipcode" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-4 offset-lg-4 col-md-4 offset-md-4 col-sm-6 offset-sm-3 col-xs-12">
								<input type="submit" class="primary-btn" style="width: 100%;" value="Submit">
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>