@extends('layout')

@section('content')
<h1>Home</h1>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled  </p>
@endsection

@section('header')
	@parent
	<p>This is appended header section</p>
@endsection

@section('sidebar')
	@parent
	<p>This is appended content sidebar</p>
@endsection

@section('footer')
	@parent 
	<p>This is appended footer</p>
@endsection
