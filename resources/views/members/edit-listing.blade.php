@extends('layouts.app')

@section('content')
	@include('layouts.banner')
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-12 col-xs-12">
				<form id="edit_listing" action="{{ url('/edit/listing/') }}" method="POST">
					{{ csrf_field() }}
					<input type="hidden" name="listing_id" value="{{ $listing->id }}">

					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>First Name<span class="red">*</span>:</label>
								<input type="text" class="form-control" name="first_name" value="{{ $listing->first_name }}" placeholder="Elon" required>
						  	</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						  	<div class="form-group">
								<label>Last Name<span class="red">*</span>:</label>
								<input type="text" class="form-control" name="last_name" value="{{ $listing->last_name }}" placeholder="Musk" required>
						  	</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Email<span class="red">*</span>:</label>
								<input type="email" class="form-control" name="email" value="{{ $listing->email }}" placeholder="elon@tesla.com" required>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Phone<span class="red">*</span>:</label>
								<input type="tel" class="form-control" name="phone" value="{{ $listing->phone }}" placeholder="1-800-TESLA" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class='form-group'>
								<label>Date of Shipping<span class="red">*</span>:</label>
								<input type='date' class='form-control' name='date_of_shipping' value="{{ $listing->date_of_shipping }}" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Origin City<span class="red">*</span>:</label>
								<input type="text" class="form-control" name="origin_city" value="{{ $listing->origin_city }}" placeholder="Fremont" required>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Origin State<span class="red">*</span>:</label>
								<select class="form-control" form="edit_listing" name="origin_state">
									<option <?php if($listing->origin_state == "Alabama") { echo 'selected'; } ?> value="Alabama">Alabama</option>
									<option <?php if($listing->origin_state == "Alaska") { echo 'selected'; } ?> value="Alaska">Alaska</option>
									<option <?php if($listing->origin_state == "Arizona") { echo 'selected'; } ?> value="Arizona">Arizona</option>
									<option <?php if($listing->origin_state == "Arkansas") { echo 'selected'; } ?> value="Arkansas">Arkansas</option>
									<option <?php if($listing->origin_state == "California") { echo 'selected'; } ?> value="California">California</option>
									<option <?php if($listing->origin_state == "Colorado") { echo 'selected'; } ?> value="Colorado">Colorado</option>
									<option <?php if($listing->origin_state == "Connecticut") { echo 'selected'; } ?> value="Connecticut">Connecticut</option>
									<option <?php if($listing->origin_state == "Delaware") { echo 'selected'; } ?> value="Delaware">Delaware</option>
									<option <?php if($listing->origin_state == "District Of Columbia") { echo 'selected'; } ?> value="District Of Columbia">District Of Columbia</option>
									<option <?php if($listing->origin_state == "Florida") { echo 'selected'; } ?> value="Florida">Florida</option>
									<option <?php if($listing->origin_state == "Georgia") { echo 'selected'; } ?> value="Georgia">Georgia</option>
									<option <?php if($listing->origin_state == "Hawaii") { echo 'selected'; } ?> value="Hawaii">Hawaii</option>
									<option <?php if($listing->origin_state == "Idaho") { echo 'selected'; } ?> value="Idaho">Idaho</option>
									<option <?php if($listing->origin_state == "Illinois") { echo 'selected'; } ?> value="Illinois">Illinois</option>
									<option <?php if($listing->origin_state == "Indiana") { echo 'selected'; } ?> value="Indiana">Indiana</option>
									<option <?php if($listing->origin_state == "Iowa") { echo 'selected'; } ?> value="Iowa">Iowa</option>
									<option <?php if($listing->origin_state == "Kansas") { echo 'selected'; } ?> value="Kansas">Kansas</option>
									<option <?php if($listing->origin_state == "Kentucky") { echo 'selected'; } ?> value="Kentucky">Kentucky</option>
									<option <?php if($listing->origin_state == "Louisiana") { echo 'selected'; } ?> value="Louisiana">Louisiana</option>
									<option <?php if($listing->origin_state == "Maine") { echo 'selected'; } ?> value="Maine">Maine</option>
									<option <?php if($listing->origin_state == "Maryland") { echo 'selected'; } ?> value="Maryland">Maryland</option>
									<option <?php if($listing->origin_state == "Massachusetts") { echo 'selected'; } ?> value="Massachusetts">Massachusetts</option>
									<option <?php if($listing->origin_state == "Michigan") { echo 'selected'; } ?> value="Michigan">Michigan</option>
									<option <?php if($listing->origin_state == "Minnesota") { echo 'selected'; } ?> value="Minnesota">Minnesota</option>
									<option <?php if($listing->origin_state == "Mississippi") { echo 'selected'; } ?> value="Mississippi">Mississippi</option>
									<option <?php if($listing->origin_state == "Missouri") { echo 'selected'; } ?> value="Missouri">Missouri</option>
									<option <?php if($listing->origin_state == "Montana") { echo 'selected'; } ?> value="Montana">Montana</option>
									<option <?php if($listing->origin_state == "Nebraska") { echo 'selected'; } ?> value="Nebraska">Nebraska</option>
									<option <?php if($listing->origin_state == "Nevada") { echo 'selected'; } ?> value="Nevada">Nevada</option>
									<option <?php if($listing->origin_state == "New Hampshire") { echo 'selected'; } ?> value="New Hampshire">New Hampshire</option>
									<option <?php if($listing->origin_state == "New Jersey") { echo 'selected'; } ?> value="New Jersey">New Jersey</option>
									<option <?php if($listing->origin_state == "New Mexico") { echo 'selected'; } ?> value="New Mexico">New Mexico</option>
									<option <?php if($listing->origin_state == "New York") { echo 'selected'; } ?> value="New York">New York</option>
									<option <?php if($listing->origin_state == "North Carolina") { echo 'selected'; } ?> value="North Carolina">North Carolina</option>
									<option <?php if($listing->origin_state == "North Dakota") { echo 'selected'; } ?> value="North Dakota">North Dakota</option>
									<option <?php if($listing->origin_state == "Ohio") { echo 'selected'; } ?> value="Ohio">Ohio</option>
									<option <?php if($listing->origin_state == "Oklahoma") { echo 'selected'; } ?> value="Oklahoma">Oklahoma</option>
									<option <?php if($listing->origin_state == "Oregon") { echo 'selected'; } ?> value="Oregon">Oregon</option>
									<option <?php if($listing->origin_state == "Pennsylvania") { echo 'selected'; } ?> value="Pennsylvania">Pennsylvania</option>
									<option <?php if($listing->origin_state == "Rhode Island") { echo 'selected'; } ?> value="Rhode Island">Rhode Island</option>
									<option <?php if($listing->origin_state == "South Carolina") { echo 'selected'; } ?> value="South Carolina">South Carolina</option>
									<option <?php if($listing->origin_state == "South Dakota") { echo 'selected'; } ?> value="South Dakota">South Dakota</option>
									<option <?php if($listing->origin_state == "Tennessee") { echo 'selected'; } ?> value="Tennessee">Tennessee</option>
									<option <?php if($listing->origin_state == "Texas") { echo 'selected'; } ?> value="Texas">Texas</option>
									<option <?php if($listing->origin_state == "Utah") { echo 'selected'; } ?> value="Utah">Utah</option>
									<option <?php if($listing->origin_state == "Vermont") { echo 'selected'; } ?> value="Vermont">Vermont</option>
									<option <?php if($listing->origin_state == "Virginia") { echo 'selected'; } ?> value="Virginia">Virginia</option>
									<option <?php if($listing->origin_state == "Washington") { echo 'selected'; } ?> value="Washington">Washington</option>
									<option <?php if($listing->origin_state == "West Virginia") { echo 'selected'; } ?> value="West Virginia">West Virginia</option>
									<option <?php if($listing->origin_state == "Wisconsin") { echo 'selected'; } ?> value="Wisconsin">Wisconsin</option>
									<option <?php if($listing->origin_state == "Wyoming") { echo 'selected'; } ?> value="Wyoming">Wyoming</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Destination City<span class="red">*</span>:</label>
								<input type="text" class="form-control" name="destination_city" value="{{ $listing->destination_city }}" placeholder="Dallas" required>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Destination State<span class="red">*</span>:</label>
								<select class="form-control" form="edit_listing" name="destination_state">
									<option <?php if($listing->destination_state == "Alabama") { echo 'selected'; } ?> value="Alabama">Alabama</option>
									<option <?php if($listing->destination_state == "Alaska") { echo 'selected'; } ?> value="Alaska">Alaska</option>
									<option <?php if($listing->destination_state == "Arizona") { echo 'selected'; } ?> value="Arizona">Arizona</option>
									<option <?php if($listing->destination_state == "Arkansas") { echo 'selected'; } ?> value="Arkansas">Arkansas</option>
									<option <?php if($listing->destination_state == "California") { echo 'selected'; } ?> value="California">California</option>
									<option <?php if($listing->destination_state == "Colorado") { echo 'selected'; } ?> value="Colorado">Colorado</option>
									<option <?php if($listing->destination_state == "Connecticut") { echo 'selected'; } ?> value="Connecticut">Connecticut</option>
									<option <?php if($listing->destination_state == "Delaware") { echo 'selected'; } ?> value="Delaware">Delaware</option>
									<option <?php if($listing->destination_state == "District Of Columbia") { echo 'selected'; } ?> value="District Of Columbia">District Of Columbia</option>
									<option <?php if($listing->destination_state == "Florida") { echo 'selected'; } ?> value="Florida">Florida</option>
									<option <?php if($listing->destination_state == "Georgia") { echo 'selected'; } ?> value="Georgia">Georgia</option>
									<option <?php if($listing->destination_state == "Hawaii") { echo 'selected'; } ?> value="Hawaii">Hawaii</option>
									<option <?php if($listing->destination_state == "Idaho") { echo 'selected'; } ?> value="Idaho">Idaho</option>
									<option <?php if($listing->destination_state == "Illinois") { echo 'selected'; } ?> value="Illinois">Illinois</option>
									<option <?php if($listing->destination_state == "Indiana") { echo 'selected'; } ?> value="Indiana">Indiana</option>
									<option <?php if($listing->destination_state == "Iowa") { echo 'selected'; } ?> value="Iowa">Iowa</option>
									<option <?php if($listing->destination_state == "Kansas") { echo 'selected'; } ?> value="Kansas">Kansas</option>
									<option <?php if($listing->destination_state == "Kentucky") { echo 'selected'; } ?> value="Kentucky">Kentucky</option>
									<option <?php if($listing->destination_state == "Louisiana") { echo 'selected'; } ?> value="Louisiana">Louisiana</option>
									<option <?php if($listing->destination_state == "Maine") { echo 'selected'; } ?> value="Maine">Maine</option>
									<option <?php if($listing->destination_state == "Maryland") { echo 'selected'; } ?> value="Maryland">Maryland</option>
									<option <?php if($listing->destination_state == "Massachusetts") { echo 'selected'; } ?> value="Massachusetts">Massachusetts</option>
									<option <?php if($listing->destination_state == "Michigan") { echo 'selected'; } ?> value="Michigan">Michigan</option>
									<option <?php if($listing->destination_state == "Minnesota") { echo 'selected'; } ?> value="Minnesota">Minnesota</option>
									<option <?php if($listing->destination_state == "Mississippi") { echo 'selected'; } ?> value="Mississippi">Mississippi</option>
									<option <?php if($listing->destination_state == "Missouri") { echo 'selected'; } ?> value="Missouri">Missouri</option>
									<option <?php if($listing->destination_state == "Montana") { echo 'selected'; } ?> value="Montana">Montana</option>
									<option <?php if($listing->destination_state == "Nebraska") { echo 'selected'; } ?> value="Nebraska">Nebraska</option>
									<option <?php if($listing->destination_state == "Nevada") { echo 'selected'; } ?> value="Nevada">Nevada</option>
									<option <?php if($listing->destination_state == "New Hampshire") { echo 'selected'; } ?> value="New Hampshire">New Hampshire</option>
									<option <?php if($listing->destination_state == "New Jersey") { echo 'selected'; } ?> value="New Jersey">New Jersey</option>
									<option <?php if($listing->destination_state == "New Mexico") { echo 'selected'; } ?> value="New Mexico">New Mexico</option>
									<option <?php if($listing->destination_state == "New York") { echo 'selected'; } ?> value="New York">New York</option>
									<option <?php if($listing->destination_state == "North Carolina") { echo 'selected'; } ?> value="North Carolina">North Carolina</option>
									<option <?php if($listing->destination_state == "North Dakota") { echo 'selected'; } ?> value="North Dakota">North Dakota</option>
									<option <?php if($listing->destination_state == "Ohio") { echo 'selected'; } ?> value="Ohio">Ohio</option>
									<option <?php if($listing->destination_state == "Oklahoma") { echo 'selected'; } ?> value="Oklahoma">Oklahoma</option>
									<option <?php if($listing->destination_state == "Oregon") { echo 'selected'; } ?> value="Oregon">Oregon</option>
									<option <?php if($listing->destination_state == "Pennsylvania") { echo 'selected'; } ?> value="Pennsylvania">Pennsylvania</option>
									<option <?php if($listing->destination_state == "Rhode Island") { echo 'selected'; } ?> value="Rhode Island">Rhode Island</option>
									<option <?php if($listing->destination_state == "South Carolina") { echo 'selected'; } ?> value="South Carolina">South Carolina</option>
									<option <?php if($listing->destination_state == "South Dakota") { echo 'selected'; } ?> value="South Dakota">South Dakota</option>
									<option <?php if($listing->destination_state == "Tennessee") { echo 'selected'; } ?> value="Tennessee">Tennessee</option>
									<option <?php if($listing->destination_state == "Texas") { echo 'selected'; } ?> value="Texas">Texas</option>
									<option <?php if($listing->destination_state == "Utah") { echo 'selected'; } ?> value="Utah">Utah</option>
									<option <?php if($listing->destination_state == "Vermont") { echo 'selected'; } ?> value="Vermont">Vermont</option>
									<option <?php if($listing->destination_state == "Virginia") { echo 'selected'; } ?> value="Virginia">Virginia</option>
									<option <?php if($listing->destination_state == "Washington") { echo 'selected'; } ?> value="Washington">Washington</option>
									<option <?php if($listing->destination_state == "West Virginia") { echo 'selected'; } ?> value="West Virginia">West Virginia</option>
									<option <?php if($listing->destination_state == "Wisconsin") { echo 'selected'; } ?> value="Wisconsin">Wisconsin</option>
									<option <?php if($listing->destination_state == "Wyoming") { echo 'selected'; } ?> value="Wyoming">Wyoming</option>
								</select>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Vehicle Year<span class="red">*</span>:</label>
								<input type="number" class="form-control" step="1" min="1900" name="vehicle_year" placeholder="2018" value="{{ $listing->vehicle_year }}" required>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Vehicle Make<span class="red">*</span>:</label>
								<input type="text" placeholder="Tesla" name="vehicle_make" value="{{ $listing->vehicle_make }}" class="form-control" required>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Vehicle Model<span class="red">*</span>:</label>
								<input type="text" placeholder="Model S" name="vehicle_model" value="{{ $listing->vehicle_model }}" class="form-control" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Note:</label>
								<textarea placeholder="Please don't scratch the paint :)" class="form-control" rows="3" form="edit_listing" value="{{ $listing->note }}"></textarea>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12 col-xs-12">
							<input type="submit" class="btn btn-primary" value="Save Listing">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection