@extends('layouts.app')
@section('content')

<div class="val_content">

	<div class="notice">
	  <p>This is validation. Validation is needed because invalid data can break the program execution. This is an important aspect in any web application.</p>
	</div>

	@if(session()->has('message'))
		<div class="success_message">
			<p>{{ session('message') }}</p>
		</div>
	@endif

	@foreach($errors->all() as $error)
		<div class="error_message">
			<p>{{ $error }}</p>
		</div>
	@endforeach

	<div class="form valid">	
		<form method="POST" action="{{ action('WorkerController@store') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="text" name="name" placeholder="name">
			<input type="text" name="age" placeholder="age">
			<button type="submit">Add</button>
		</form>
	</div>
</div>
		
@stop