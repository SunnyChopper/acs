@extends('layouts.app')

@section('content')
	@include('modals.create_listing')
	@include('modals.delete_listing')
	@include('layouts.banner')
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<h3>Manage Your Listings</h3>
				@if(count($listings) != 0)
					<button type="button" class="btn btn-primary btn-sm mt-2" data-toggle="modal" data-target="#create_listing_modal">Create New Listing</button>
				@endif
			</div>
		</div>

		<div class="row mt-16">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				@if(count($listings) == 0)
					<div class="jumbotron">
						<p class="text-center">Seems like you do not have any active listings. Click on the button below to get started.</p>
						<button type="button" class="btn btn-primary center-button" data-toggle="modal" data-target="#create_listing_modal">Create a Listing</button>
					</div>
				@else
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Display Name</th>
								<th>Date of Shipment</th>
								<th>Origin</th>
								<th>Destination</th>
								<th>Vehicle</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($listings as $listing)
								<tr>
									<td>{{ $listing->first_name }} {{ $listing->last_name }}</td>
									<td>{{ $listing->date_of_shipping }}</td>
									<td>{{ $listing->origin_city }}, {{ $listing->origin_state }}</td>
									<td>{{ $listing->destination_city }}, {{ $listing->destination_state }}</td>
									<td>{{ $listing->vehicle_year }} {{ $listing->vehicle_make }} {{ $listing->vehicle_model }}</td>
									<td>
										<a href="/members/listings/edit/{{ $listing->id }}" class="btn btn-warning">Edit</a>
										<button id="{{ $listing->id }}" class="btn btn-danger" onclick="showDeleteListingModal(this.id);">Delete</button>
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