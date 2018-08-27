<div class="modal fade" id="create_listing_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
	  <div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Create Listing</h5>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="modal-body">
		<form action="/listings/create" id="create_listing" method="POST">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="form-group">
						<label>First Name<span class="red">*</span>:</label>
						<input type="text" class="form-control" name="first_name" value="{{ explode(" ", Auth::user()->name)[0] }}" placeholder="Elon" required>
				  	</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				  	<div class="form-group">
						<label>Last Name<span class="red">*</span>:</label>
						<input type="text" class="form-control" name="last_name" value="{{ explode(" ", Auth::user()->name)[1] }}" placeholder="Musk" required>
				  	</div>
				</div>
		  	</div>

		  <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			  <div class="form-group">
				<label>Email<span class="red">*</span>:</label>
				<input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="elon@tesla.com" required>
			  </div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			  <div class="form-group">
				<label>Phone<span class="red">*</span>:</label>
				<input type="tel" class="form-control" name="phone" placeholder="1-800-TESLA" required>
			  </div>
			</div>
		  </div>

		  <div class='row'>
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
			  <div class='form-group'>
				<label>Date of Shipping<span class="red">*</span>:</label>
				<input type='date' class='form-control' name='date_of_shipping' required>
			  </div>
			</div>
		  </div>

		  <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			  <div class="form-group">
				<label>Origin City<span class="red">*</span>:</label>
				<input type="text" class="form-control" name="origin_city" placeholder="Fremont" required>
			  </div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			  <div class="form-group">
				<label>Origin State<span class="red">*</span>:</label>
				<select class="form-control" form="create_listing" name="origin_state">
				  <option value="Alabama">Alabama</option>
				  <option value="Alaska">Alaska</option>
				  <option value="Arizona">Arizona</option>
				  <option value="Arkansas">Arkansas</option>
				  <option value="California">California</option>
				  <option value="Colorado">Colorado</option>
				  <option value="Connecticut">Connecticut</option>
				  <option value="Delaware">Delaware</option>
				  <option value="District Of Columbia">District Of Columbia</option>
				  <option value="Florida">Florida</option>
				  <option value="Georgia">Georgia</option>
				  <option value="Hawaii">Hawaii</option>
				  <option value="Idaho">Idaho</option>
				  <option value="Illinois">Illinois</option>
				  <option value="Indiana">Indiana</option>
				  <option value="Iowa">Iowa</option>
				  <option value="Kansas">Kansas</option>
				  <option value="Kentucky">Kentucky</option>
				  <option value="Louisiana">Louisiana</option>
				  <option value="Maine">Maine</option>
				  <option value="Maryland">Maryland</option>
				  <option value="Massachusetts">Massachusetts</option>
				  <option value="Michigan">Michigan</option>
				  <option value="Minnesota">Minnesota</option>
				  <option value="Mississippi">Mississippi</option>
				  <option value="Missouri">Missouri</option>
				  <option value="Montana">Montana</option>
				  <option value="Nebraska">Nebraska</option>
				  <option value="Nevada">Nevada</option>
				  <option value="New Hampshire">New Hampshire</option>
				  <option value="New Jersey">New Jersey</option>
				  <option value="New Mexico">New Mexico</option>
				  <option value="New York">New York</option>
				  <option value="North Carolina">North Carolina</option>
				  <option value="North Dakota">North Dakota</option>
				  <option value="Ohio">Ohio</option>
				  <option value="Oklahoma">Oklahoma</option>
				  <option value="Oregon">Oregon</option>
				  <option value="Pennsylvania">Pennsylvania</option>
				  <option value="Rhode Island">Rhode Island</option>
				  <option value="South Carolina">South Carolina</option>
				  <option value="South Dakota">South Dakota</option>
				  <option value="Tennessee">Tennessee</option>
				  <option value="Texas">Texas</option>
				  <option value="Utah">Utah</option>
				  <option value="Vermont">Vermont</option>
				  <option value="Virginia">Virginia</option>
				  <option value="Washington">Washington</option>
				  <option value="West Virginia">West Virginia</option>
				  <option value="Wisconsin">Wisconsin</option>
				  <option value="Wyoming">Wyoming</option>
				</select>
			  </div>
			</div>
		  </div>
		  <div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			  <div class="form-group">
				<label>Destination City<span class="red">*</span>:</label>
				<input type="text" class="form-control" name="destination_city" placeholder="Dallas" required>
			  </div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			  <div class="form-group">
				<label>Destination State<span class="red">*</span>:</label>
				<select class="form-control" form="create_listing" name="destination_state">
				  <option value="Alabama">Alabama</option>
				  <option value="Alaska">Alaska</option>
				  <option value="Arizona">Arizona</option>
				  <option value="Arkansas">Arkansas</option>
				  <option value="California">California</option>
				  <option value="Colorado">Colorado</option>
				  <option value="Connecticut">Connecticut</option>
				  <option value="Delaware">Delaware</option>
				  <option value="District Of Columbia">District Of Columbia</option>
				  <option value="Florida">Florida</option>
				  <option value="Georgia">Georgia</option>
				  <option value="Hawaii">Hawaii</option>
				  <option value="Idaho">Idaho</option>
				  <option value="Illinois">Illinois</option>
				  <option value="Indiana">Indiana</option>
				  <option value="Iowa">Iowa</option>
				  <option value="Kansas">Kansas</option>
				  <option value="Kentucky">Kentucky</option>
				  <option value="Louisiana">Louisiana</option>
				  <option value="Maine">Maine</option>
				  <option value="Maryland">Maryland</option>
				  <option value="Massachusetts">Massachusetts</option>
				  <option value="Michigan">Michigan</option>
				  <option value="Minnesota">Minnesota</option>
				  <option value="Mississippi">Mississippi</option>
				  <option value="Missouri">Missouri</option>
				  <option value="Montana">Montana</option>
				  <option value="Nebraska">Nebraska</option>
				  <option value="Nevada">Nevada</option>
				  <option value="New Hampshire">New Hampshire</option>
				  <option value="New Jersey">New Jersey</option>
				  <option value="New Mexico">New Mexico</option>
				  <option value="New York">New York</option>
				  <option value="North Carolina">North Carolina</option>
				  <option value="North Dakota">North Dakota</option>
				  <option value="Ohio">Ohio</option>
				  <option value="Oklahoma">Oklahoma</option>
				  <option value="Oregon">Oregon</option>
				  <option value="Pennsylvania">Pennsylvania</option>
				  <option value="Rhode Island">Rhode Island</option>
				  <option value="South Carolina">South Carolina</option>
				  <option value="South Dakota">South Dakota</option>
				  <option value="Tennessee">Tennessee</option>
				  <option value="Texas">Texas</option>
				  <option value="Utah">Utah</option>
				  <option value="Vermont">Vermont</option>
				  <option value="Virginia">Virginia</option>
				  <option value="Washington">Washington</option>
				  <option value="West Virginia">West Virginia</option>
				  <option value="Wisconsin">Wisconsin</option>
				  <option value="Wyoming">Wyoming</option>
				</select>
			  </div>
			</div>
		  </div>

		  <div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			  <div class="form-group">
				<label>Vehicle Year<span class="red">*</span>:</label>
				<input type="number" class="form-control" step="1" min="1900" name="vehicle_year" placeholder="2018" required>
			  </div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			  <div class="form-group">
				<label>Vehicle Make<span class="red">*</span>:</label>
				<input type="text" placeholder="Tesla" name="vehicle_make" class="form-control" required>
			  </div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			  <div class="form-group">
				<label>Vehicle Model<span class="red">*</span>:</label>
				<input type="text" placeholder="Model S" name="vehicle_model" class="form-control" required>
			  </div>
			</div>
		  </div>

		  <div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			  <div class="form-group">
				<label>Note:</label>
				<textarea placeholder="Please don't scratch the paint :)" class="form-control" rows="3" form="create_listing"></textarea>
			  </div>
			</div>
		  </div>

		  <div class="row">
			<div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12 col-xs-12">
			  <input type="submit" class="btn btn-primary" value="Submit Listing">
			</div>
		  </div>
		</form>
	  </div>
	</div>
  </div>
</div>