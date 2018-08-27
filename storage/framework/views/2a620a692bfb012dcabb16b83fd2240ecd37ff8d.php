<?php $__env->startSection('content'); ?>
	<?php echo $__env->make('layouts.banner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h3>Fill Out The Form Below</h3>
				<p>We'll get back to you as soon as humanly possible.</p>
				<hr />
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12 col-xs-12">
				<form>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Name:</label>
								<input type="text" class="form-control" name="name" required>
							</div> 
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Email:</label>
								<input type="email" class="form-control" name="email" required>
							</div> 
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Message:</label>
								<textarea rows="6" class="form-control"></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12 col-xs-12">
							<input type="submit" class="btn btn-primary" style="width: 100%;" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>