@extends('layouts.app')

@section('content')
	@include('layouts.banner')
	<div class="container mt-64 mb-64">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2 col-sm-12 col-xs-12">
				<div class="grey-box">
					<form action="/business/login/verify" method="post">
						{{ csrf_field() }}
						<div class="form-group">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<label>Username:</label>
								<input type="text" class="form-control" name="username" required>
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<label>Password:</label>
								<input type="password" class="form-control" name="password" required>
							</div>
						</div>

						@if ($errors->any())
					        <p class="text-center red">{{ implode('', $errors->all(':message')) }}</p>
						@endif

						<div class="form-group">
							<div class="col-lg-4 offset-lg-4 col-md-6 offset-md-3 col-sm-12 col-xs-12">
								<input type="submit" value="Submit" class="primary-btn" style="width: 100%;">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection