@extends('layouts.app')

@section('content')
	@include('layouts.banner')
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
				<h4 class="mb-1">Search Again</h4>
				<form action="{{ url('/guest/search/') }}" method="post">
					{{ csrf_field() }}
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Origin State</label>
								<select class="form-control" name="origin_state">
									<option <?php if($origin_state == "AL") { echo "selected"; } ?> value="AL">Alabama</option>
									<option <?php if($origin_state == "AK") { echo "selected"; } ?> value="AK">Alaska</option>
									<option <?php if($origin_state == "AZ") { echo "selected"; } ?> value="AZ">Arizona</option>
									<option <?php if($origin_state == "AR") { echo "selected"; } ?> value="AR">Arkansas</option>
									<option <?php if($origin_state == "CA") { echo "selected"; } ?> value="CA">California</option>
									<option <?php if($origin_state == "CO") { echo "selected"; } ?> value="CO">Colorado</option>
									<option <?php if($origin_state == "CT") { echo "selected"; } ?> value="CT">Connecticut</option>
									<option <?php if($origin_state == "DE") { echo "selected"; } ?> value="DE">Delaware</option>
									<option <?php if($origin_state == "DC") { echo "selected"; } ?> value="DC">District Of Columbia</option>
									<option <?php if($origin_state == "FL") { echo "selected"; } ?> value="FL">Florida</option>
									<option <?php if($origin_state == "GA") { echo "selected"; } ?> value="GA">Georgia</option>
									<option <?php if($origin_state == "HI") { echo "selected"; } ?> value="HI">Hawaii</option>
									<option <?php if($origin_state == "ID") { echo "selected"; } ?> value="ID">Idaho</option>
									<option <?php if($origin_state == "IL") { echo "selected"; } ?> value="IL">Illinois</option>
									<option <?php if($origin_state == "IN") { echo "selected"; } ?> value="IN">Indiana</option>
									<option <?php if($origin_state == "IA") { echo "selected"; } ?> value="IA">Iowa</option>
									<option <?php if($origin_state == "KS") { echo "selected"; } ?> value="KS">Kansas</option>
									<option <?php if($origin_state == "KY") { echo "selected"; } ?> value="KY">Kentucky</option>
									<option <?php if($origin_state == "LA") { echo "selected"; } ?> value="LA">Louisiana</option>
									<option <?php if($origin_state == "ME") { echo "selected"; } ?> value="ME">Maine</option>
									<option <?php if($origin_state == "MD") { echo "selected"; } ?> value="MD">Maryland</option>
									<option <?php if($origin_state == "MA") { echo "selected"; } ?> value="MA">Massachusetts</option>
									<option <?php if($origin_state == "MI") { echo "selected"; } ?> value="MI">Michigan</option>
									<option <?php if($origin_state == "MN") { echo "selected"; } ?> value="MN">Minnesota</option>
									<option <?php if($origin_state == "MS") { echo "selected"; } ?> value="MS">Mississippi</option>
									<option <?php if($origin_state == "MO") { echo "selected"; } ?> value="MO">Missouri</option>
									<option <?php if($origin_state == "MT") { echo "selected"; } ?> value="MT">Montana</option>
									<option <?php if($origin_state == "NE") { echo "selected"; } ?> value="NE">Nebraska</option>
									<option <?php if($origin_state == "NV") { echo "selected"; } ?> value="NV">Nevada</option>
									<option <?php if($origin_state == "NH") { echo "selected"; } ?> value="NH">New Hampshire</option>
									<option <?php if($origin_state == "NJ") { echo "selected"; } ?> value="NJ">New Jersey</option>
									<option <?php if($origin_state == "NM") { echo "selected"; } ?> value="NM">New Mexico</option>
									<option <?php if($origin_state == "NY") { echo "selected"; } ?> value="NY">New York</option>
									<option <?php if($origin_state == "NC") { echo "selected"; } ?> value="NC">North Carolina</option>
									<option <?php if($origin_state == "ND") { echo "selected"; } ?> value="ND">North Dakota</option>
									<option <?php if($origin_state == "OH") { echo "selected"; } ?> value="OH">Ohio</option>
									<option <?php if($origin_state == "OK") { echo "selected"; } ?> value="OK">Oklahoma</option>
									<option <?php if($origin_state == "OR") { echo "selected"; } ?> value="OR">Oregon</option>
									<option <?php if($origin_state == "PA") { echo "selected"; } ?> value="PA">Pennsylvania</option>
									<option <?php if($origin_state == "RI") { echo "selected"; } ?> value="RI">Rhode Island</option>
									<option <?php if($origin_state == "SC") { echo "selected"; } ?> value="SC">South Carolina</option>
									<option <?php if($origin_state == "SD") { echo "selected"; } ?> value="SD">South Dakota</option>
									<option <?php if($origin_state == "TN") { echo "selected"; } ?> value="TN">Tennessee</option>
									<option <?php if($origin_state == "TX") { echo "selected"; } ?> value="TX">Texas</option>
									<option <?php if($origin_state == "UT") { echo "selected"; } ?> value="UT">Utah</option>
									<option <?php if($origin_state == "VT") { echo "selected"; } ?> value="VT">Vermont</option>
									<option <?php if($origin_state == "VA") { echo "selected"; } ?> value="VA">Virginia</option>
									<option <?php if($origin_state == "WA") { echo "selected"; } ?> value="WA">Washington</option>
									<option <?php if($origin_state == "WV") { echo "selected"; } ?> value="WV">West Virginia</option>
									<option <?php if($origin_state == "WI") { echo "selected"; } ?> value="WI">Wisconsin</option>
									<option <?php if($origin_state == "WY") { echo "selected"; } ?> value="WY">Wyoming</option>
								</select>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Destination State</label>
								<select class="form-control" name="destination_state">
									<option <?php if($destination_state == "AL") { echo "selected"; } ?> value="AL">Alabama</option>
									<option <?php if($destination_state == "AK") { echo "selected"; } ?> value="AK">Alaska</option>
									<option <?php if($destination_state == "AZ") { echo "selected"; } ?> value="AZ">Arizona</option>
									<option <?php if($destination_state == "AR") { echo "selected"; } ?> value="AR">Arkansas</option>
									<option <?php if($destination_state == "CA") { echo "selected"; } ?> value="CA">California</option>
									<option <?php if($destination_state == "CO") { echo "selected"; } ?> value="CO">Colorado</option>
									<option <?php if($destination_state == "CT") { echo "selected"; } ?> value="CT">Connecticut</option>
									<option <?php if($destination_state == "DE") { echo "selected"; } ?> value="DE">Delaware</option>
									<option <?php if($destination_state == "DC") { echo "selected"; } ?> value="DC">District Of Columbia</option>
									<option <?php if($destination_state == "FL") { echo "selected"; } ?> value="FL">Florida</option>
									<option <?php if($destination_state == "GA") { echo "selected"; } ?> value="GA">Georgia</option>
									<option <?php if($destination_state == "HI") { echo "selected"; } ?> value="HI">Hawaii</option>
									<option <?php if($destination_state == "ID") { echo "selected"; } ?> value="ID">Idaho</option>
									<option <?php if($destination_state == "IL") { echo "selected"; } ?> value="IL">Illinois</option>
									<option <?php if($destination_state == "IN") { echo "selected"; } ?> value="IN">Indiana</option>
									<option <?php if($destination_state == "IA") { echo "selected"; } ?> value="IA">Iowa</option>
									<option <?php if($destination_state == "KS") { echo "selected"; } ?> value="KS">Kansas</option>
									<option <?php if($destination_state == "KY") { echo "selected"; } ?> value="KY">Kentucky</option>
									<option <?php if($destination_state == "LA") { echo "selected"; } ?> value="LA">Louisiana</option>
									<option <?php if($destination_state == "ME") { echo "selected"; } ?> value="ME">Maine</option>
									<option <?php if($destination_state == "MD") { echo "selected"; } ?> value="MD">Maryland</option>
									<option <?php if($destination_state == "MA") { echo "selected"; } ?> value="MA">Massachusetts</option>
									<option <?php if($destination_state == "MI") { echo "selected"; } ?> value="MI">Michigan</option>
									<option <?php if($destination_state == "MN") { echo "selected"; } ?> value="MN">Minnesota</option>
									<option <?php if($destination_state == "MS") { echo "selected"; } ?> value="MS">Mississippi</option>
									<option <?php if($destination_state == "MO") { echo "selected"; } ?> value="MO">Missouri</option>
									<option <?php if($destination_state == "MT") { echo "selected"; } ?> value="MT">Montana</option>
									<option <?php if($destination_state == "NE") { echo "selected"; } ?> value="NE">Nebraska</option>
									<option <?php if($destination_state == "NV") { echo "selected"; } ?> value="NV">Nevada</option>
									<option <?php if($destination_state == "NH") { echo "selected"; } ?> value="NH">New Hampshire</option>
									<option <?php if($destination_state == "NJ") { echo "selected"; } ?> value="NJ">New Jersey</option>
									<option <?php if($destination_state == "NM") { echo "selected"; } ?> value="NM">New Mexico</option>
									<option <?php if($destination_state == "NY") { echo "selected"; } ?> value="NY">New York</option>
									<option <?php if($destination_state == "NC") { echo "selected"; } ?> value="NC">North Carolina</option>
									<option <?php if($destination_state == "ND") { echo "selected"; } ?> value="ND">North Dakota</option>
									<option <?php if($destination_state == "OH") { echo "selected"; } ?> value="OH">Ohio</option>
									<option <?php if($destination_state == "OK") { echo "selected"; } ?> value="OK">Oklahoma</option>
									<option <?php if($destination_state == "OR") { echo "selected"; } ?> value="OR">Oregon</option>
									<option <?php if($destination_state == "PA") { echo "selected"; } ?> value="PA">Pennsylvania</option>
									<option <?php if($destination_state == "RI") { echo "selected"; } ?> value="RI">Rhode Island</option>
									<option <?php if($destination_state == "SC") { echo "selected"; } ?> value="SC">South Carolina</option>
									<option <?php if($destination_state == "SD") { echo "selected"; } ?> value="SD">South Dakota</option>
									<option <?php if($destination_state == "TN") { echo "selected"; } ?> value="TN">Tennessee</option>
									<option <?php if($destination_state == "TX") { echo "selected"; } ?> value="TX">Texas</option>
									<option <?php if($destination_state == "UT") { echo "selected"; } ?> value="UT">Utah</option>
									<option <?php if($destination_state == "VT") { echo "selected"; } ?> value="VT">Vermont</option>
									<option <?php if($destination_state == "VA") { echo "selected"; } ?> value="VA">Virginia</option>
									<option <?php if($destination_state == "WA") { echo "selected"; } ?> value="WA">Washington</option>
									<option <?php if($destination_state == "WV") { echo "selected"; } ?> value="WV">West Virginia</option>
									<option <?php if($destination_state == "WI") { echo "selected"; } ?> value="WI">Wisconsin</option>
									<option <?php if($destination_state == "WY") { echo "selected"; } ?> value="WY">Wyoming</option>
								</select>
							</div>
						</div>

						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="form-group">
								<label></label>
								<input type="submit" class="primary-btn full-width-button" value="Search">
							</div>
						</div>
					</div>
				</form>
				<hr />
			</div>

			<div class="col-lg-10 col-md-9 col-sm-12 col-xs-12">
				@if(count($search_results) == 0)
					<div class="jumbotron">
						<p class="text-center">No search results...</p>
					</div>
				@else
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Business Name</th>
							<th>Location</th>
							<th>Website</th>
							<th>Rating</th>
							<th>Review</th>
							<th>Contact</th>
						</tr>
					</thead>
					<tbody>
						@foreach($search_results as $result)
						<tr>
							<td>{{ $result->name }}</td>
							<td>{{ $result->city }}, {{ $result->state }}</td>
							<td><a class="btn btn-sm btn-primary" href="{{ $result->website }}">Visit Site</a></td>
							<td><a href="{{ url('/members/register/') }}">Signup</a> to view ratings</td>
							<td><a href="{{ url('/members/register/') }}">Signup</a> to leave reviews</td>
							<td>
								<a class="btn btn-sm btn-success" href="tel:{{ $result->phone }}">Call</a>
								<a class="btn btn-sm btn-success" href="mailto:{{ $result->email }}">Email</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				@endif
			</div>
		</div>
	</div>
@endsection