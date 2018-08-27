<div class="modal fade" id="delete_review_modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Confirm</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="/reviews/delete" id="delete_review" method="POST">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" id="delete_review_id" name="review_id">
					<p>Are you sure you want to delete this review?</p>
					<input type="submit" value="Yes" class="btn btn-danger">
				</form>
			</div>
		</div>
	</div>
</div>