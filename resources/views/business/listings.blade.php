@extends('layouts.app')

@section('content')
	@include('layouts.banner')
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Name</th>
							<th>Requested Shipment Date</th>
							<th>Origin</th>
							<th>Destination</th>
							<th>Vehicle</th>
							<th>Contact</th>
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
									<a href="mailto:{{ $listing->email }}" class="btn btn-sm btn-primary">Email</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

		<div class="row mt-16">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				{{ $listings->links() }}
			</div>
		</div>
	</div>
@endsection