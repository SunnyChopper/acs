@extends('layouts.app')

@section('content')
	@include('layouts.banner')
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-6 col-md-8 col-sm-12 col-xs-12">
				{{ csrf_field() }}
				<h4>Select a Business</h4>
				<select id="reviews_business_id" class="form-control">
					<option value="">--</option>
					@foreach($businesses as $business)
						<option value="{{ $business->id }}">{{ $business->name }} - {{ $business->city }}, {{ $business->state }}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="row mt-16" id="reviews_row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table class="table table-striped" id="reviews_table">
					<thead>
						<tr>
							<th>Title</th>
							<th>Description</th>
							<th>Rating</th>
						</tr>
					</thead>
					<tbody id="reviews_body">
					</tbody>
				</table>
			</div>
		</div>

		<div class="row mt-16" id="no_reviews" style="display: none;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="jumbotron">
					<h3 class="text-center">No reviews for this business...</h3>
				</div>
			</div>
		</div>
	</div>
@endsection