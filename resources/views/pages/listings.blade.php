@extends('layouts.app')

@section('content')
	@if(!Auth::guest())
	@include('modals.create_listing')
	@endif
	@include('layouts.banner')
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h2>Listings</h2>
				@if(Auth::guest())
				<p class="mb-4">You must signup as a member before you can create a listing. Click the button below to register.</p>
				<a href="/members/register/" class="btn btn-primary">Signup</a>
				@else
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_listing_modal">Create a Listing</button>
				@endif
				<hr />
			</div>
		</div>

		<div class="row">
			@foreach($listings as $listing)
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="listings-box">
						<h3>{{ $listing->first_name }}</h3>
						<p class="mt-4 mb-0"><b>Email:</b> Hidden</p>
						<p class="mt-0 mb-0"><b>Phone:</b> Hidden</p>
						<p class="mt-0 mb-0"><b>Origin City:</b> {{ $listing->origin_city }}</p>
						<p class="mt-0 mb-0"><b>Origin State:</b> {{ $listing->origin_state }}</p>
						<p class="mt-0 mb-0"><b>Destination City:</b> {{ $listing->destination_city }}</p>
						<p class="mt-0 mb-0"><b>Destination State:</b> {{ $listing->destination_state }}</p>
						<p class="mt-0 mb-0"><b>Vehicle Year:</b> Hidden</p>
						<p class="mt-0 mb-0"><b>Vehicle Make:</b> {{ $listing->vehicle_make }}</p>
						<p class="mt-0 mb-0"><b>Vehicle Model:</b> {{ $listing->vehicle_model }}</p>
					</div>
				</div>
			@endforeach
		</div>
		<div class="row mt-16">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				{{ $listings->links() }}
			</div>
		</div>
	</div>
@endsection