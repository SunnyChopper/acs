@extends('layouts.app')

@section('content')
	@include('layouts.banner')
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
				<form id="create_business_form" action="/checkout/register/business" method="POST">
					@csrf
					<input type="hidden" name="sub_id" value="{{ $sub_id }}">
					<input type="hidden" name="package_id" value="{{ $package_id }}">
					<input type="hidden" name="customer_id" value="{{ $customer_id }}">
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
									<label>Phone<span class="red">*</span>:</label>
									<input type="text" class="form-control" name="phone" required>
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
									<select class="form-control" form="create_business_form" name="origin_state">
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District Of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
								<div class="form-group">
									<label>Zipcode<span class="red">*</span>:</label>
									<input type="text" class="form-control" name="zipcode" required>
								</div>
							</div>
						</div>

						@if(isset($error))
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<p class="text-center red">{{ $error }}</p>
							</div>
						</div>
						@endif

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
@endsection