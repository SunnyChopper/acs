<script src="{{ URL::asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="{{ URL::asset('js/popper.min.js') }}"></script>
<script src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script>		
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>	
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
<script src="{{ URL::asset('js/jquery-ui.js') }}"></script>					
<script src="{{ URL::asset('js/easing.min.js') }}"></script>			
<script src="{{ URL::asset('js/hoverIntent.js') }}"></script>
<script src="{{ URL::asset('js/superfish.min.js') }}"></script>	
<script src="{{ URL::asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>						
<script src="{{ URL::asset('js/jquery.nice-select.min.js') }}"></script>					
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>							
<script src="{{ URL::asset('js/mail-script.js') }}"></script>	
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="{{ URL::asset('js/stripe_handler.js') }}"></script>

<script type="text/javascript">
	function showDeleteListingModal(listing_id) {
		// Set the input
		$("#delete_listing_id").val(listing_id);

		// Show the modal
		$("#delete_listing_modal").modal();
	}

	function showCreateReviewModal(business_id) {
		// Set the input
		$("#create_review_business_id").val(business_id);

		// Show the modal
		$("#create_review_modal").modal();
	}

	function showDeleteReviewModal(review_id) {
		// Set the input
		$("#delete_review_id").val(review_id);

		// Show the modal
		$("#delete_review_modal").modal();
	}

	/*
		This function is AJAX powered to support on page review submission
	*/
	$("#create_review").on('submit', function(e) {
		// Prevent from sending
		e.preventDefault();

		// Get data
		var _token = $("input[name=_token]").val();
		var business_id = $("input[name=business_id]").val();
		var order_id = $("input[name=order_id]").val();
		var title = $("input[name=title]").val();
		var stars = $("#stars").val();
		var description = $("#description").val();

		// Submit using AJAX
		$.ajax({
			url: '/reviews/create',
			type: 'POST',
			data: {
				_token: _token,
				business_id: business_id,
				order_id: order_id,
				title: title,
				stars: stars,
				description: description
			},
			success: function(data) {
				if(data == "Duplicate error") {
					$("#error").html("You have already submitted a review for this order.");
				} else {
					window.location.replace('{{ url('/members/reviews') }}');
				}
			}
		});
	});

	/*
		This function is AJAX powered to support on page review submission
	*/
	$("#new_review_form").on('submit', function(e) {
		// Prevent from sending
		e.preventDefault();

		// Get data
		var _token = $("input[name=_token]").val();
		var business_id = $("#business_id").val();
		var order_id = $("input[name=order_id]").val();
		var title = $("input[name=title]").val();
		var stars = $("#stars").val();
		var description = $("#description").val();

		// Submit using AJAX
		$.ajax({
			url: '/reviews/members/create',
			type: 'POST',
			data: {
				_token: _token,
				business_id: business_id,
				order_id: order_id,
				title: title,
				stars: stars,
				description: description
			},
			success: function(data) {
				if(data == "Duplicate error") {
					$("#error").html("You have already submitted a review for this order.");
				} else {
					window.location.replace('{{ url('/members/reviews') }}');
				}
			}
		});
	});

	$("#reviews_business_id").on('change', function() {
		// Clear out the table
		$("#reviews_body").empty();

		// Return displays to normal
		$("#reviews_row").show();
		$("#no_reviews").hide();

		// Get selected business ID
		var selected_business = $(this).find(":selected");
		var business_id = selected_business.val();

		// Token
		var _token = $("input[name=_token]").val();

		// Create AJAX request
		$.ajax({
			url: '/reviews/fetch',
			type: 'POST',
			data : {
				_token: _token,
				business_id: business_id
			},
			success: function(data) {
				// Convert to JSON
				var review_json = JSON.parse(data);

				// Check to see if no reviews
				if (review_json.length == 0) {
					// Hide table
					$("#reviews_row").hide();
					$("#no_reviews").show();
				} else {
					// Get table body object
					var table_body = $("#reviews_body");
					
					for (var i = 0; i < review_json.length; i++) {
						// Get data
						var obj = review_json[i];
						var title = obj["title"];
						var description = obj["description"];
						var rating = obj["stars"];

						// Add HTML
						var html_string = "<tr><td>" + title + "</td><td>" + description + "</td><td>" + rating + "/5</td></tr>";
						table_body.append(html_string);
					}
				}
			}
		});
	});
</script>