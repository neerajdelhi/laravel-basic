@extends('layout')

@section('content')
<h1>Contact</h1>
<div class="container">
<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
	@csrf
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" class="form-control" name="name" value="{{ old('name')}}">
			@if($errors->has('name'))
				<span class="text-danger">{{ $errors->first('name') }}
			@endif
		</div>
		<div class="form-group">
			<label for="email">email</label>
			<input type="text" class="form-control" name="email" value="{{ old('email') }}">
			@if($errors->has('email'))
				<span class="text-danger">{{ $errors->first('email') }}
			@endif
		</div>
		<div class="form-group">
			<label for="message">Message</label>
			<textarea name="message" id="message" class="form-control" cols="120" rows="10">{{ old('message') }}</textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-success" type="submit">Submit</button>
		</div>
	</form>
</div>
@endsection