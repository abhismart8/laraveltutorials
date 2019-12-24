@extends('header')
@section('title','Add New Customer')

@section('content')
<div class="row">
	<div class="col-12">
		<h1 align="center">Add New Customer</h1>
	</div>
</div>



<form action="http://localhost/crud/public/customers" method="POST" >
	<div class="form-group">
		<input type="text" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control">
	</div>
	<div> {{ $errors->first('name') }} </div>
	

	<div class="form-group">
		<input type="text" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control">
	</div>
	<div> {{ $errors->first('email') }} </div>
	

	<div class="form-group">
		<select name="active" id="active" class="form-control">
			<option value="" disabled="">Select Customer status</option>
			<option value="1">Active</option>
			<option value="0">Inactive</option>
		</select>
	</div>	

	<div class="form-group">
		<select name="company_id" id="company_id" class="form-control">
			@foreach($companies as $company)
			<option value="{{ $company->id }}">{{ $company->name }}</option>

			@endforeach
		</select>
	</div>

	<button type="submit" class="btn btn-primary">Add Customer</button>

	@csrf

</form>

@endsection	