@extends('layouts.app')

@section('content')
	@include('modals.delete_review')
	@include('layouts.banner')
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h4>Your Reviews</h4>
				<hr />
			</div>
		</div>

		@if(count($review_array) != 0)
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Business Name</th>
							<th>Title</th>
							<th>Stars</th>
							<th>Description</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($review_array as $review)
							<tr>
								<td>{{ $review[0] }}</td>
								<td>{{ $review[1]->title }}</td>
								<td>{{ $review[1]->stars }}</td>
								<td>{{ $review[1]->description }}</td>
								<td>
									<button id="{{ $review[1]->id }}" onclick="showDeleteReviewModal(this.id);" class="btn btn-sm btn-danger">Delete</button>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
		@else
		<div class="row mt-16">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="jumbotron">
					<p class="text-center">You have not made any reviews yet...you may do so by searching for a business and clicking on 'Leave a Review'</p>
				</div>
			</div>
		</div>
		@endif
	</div>
@endsection