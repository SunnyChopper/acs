@extends('layouts.app')

@section('content')
	@include('layouts.banner')
	<div class="container mt-64 mb-64">
		<form id="new_review_form" method="post" action="/reviews/members/create">
			{{ csrf_field() }}
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3>1. Select a business</h3>
					<div class="row mt-16">
						<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Business<span class="red">*</span>:</label>
								<select form="new_review_form" class="form-control" id="business_id">
								@foreach($businesses as $business)
									<option value="{{ $business->id }}">{{ $business->name }} - {{ $business->city }}, {{ $business->state }}</option>
								@endforeach
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-8 mb-8">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<hr />
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3>2. Order Information</h3>
					<div class="row mt-16">
						<div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Order ID<span class="red">*</span>:</label>
								<input type="text" class="form-control" name="order_id" required>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-8 mb-8">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<hr />
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h3>3. Write Your Review</h3>
					<div class="row mt-16">
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Title<span class="red">*</span>:</label>
								<input type="text" class="form-control" name="title" required>
							</div>
						</div>

						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Rating<span class="red">*</span>:</label>
								<select id="stars" name="stars" form="new_review_form" class="form-control">
									<option value="1">1 - Awful</option>
									<option value="2">2 - Below Average</option>
									<option value="3">3 - Average</option>
									<option value="4">4 - Above Average</option>
									<option value="5">5 - Exceptional</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row mt-16">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Description:</label>
								<textarea id="description" name="description" form="new_review_form" class="form-control" rows="4"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p class="red" id="error"></p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<input type="submit" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>
@endsection