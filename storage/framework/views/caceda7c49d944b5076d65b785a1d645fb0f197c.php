<div class="modal fade" id="create_review_modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Leave a Review</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/reviews/create" id="create_review" method="POST">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" id="create_review_business_id" name="business_id">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Title<span class="red">*</span>:</label>
								<input type="text" name="title" class="form-control" required>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Rating<span class="red">*</span>:</label>
								<select id="stars" name="stars" form="create_review" class="form-control">
									<option value="1">1 - Awful</option>
									<option value="2">2 - Below Average</option>
									<option value="3">3 - Average</option>
									<option value="4">4 - Above Average</option>
									<option value="5">5 - Exceptional</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Description:</label>
								<textarea id="description" name="description" form="create_review" class="form-control" rows="4"></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<p class="text-center red" id="error"></p>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
							<input type="submit" value="Submit Review" class="btn btn-success">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>