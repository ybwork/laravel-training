@extends('layouts.app')

@section('content')


<div class="form edit">
	<div class="error_message">
		@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
		@endforeach
	</div>
	<form action="{{ action('PlayerController@update', ['id' => $player->id]) }}" method="POST">
		{{method_field('PUT')}}
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<input type="text" value="{{$player->name}}" name="name">
		<button type="submit">Update</button>
	</form>
</div>
@stop