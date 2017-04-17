@extends('layouts.app')
@section('content')

	<div class="notice">
	  <p>This is REST. REST are the architectural style of interaction of components applications in the network. It is a single standard. To work with the data it uses the methods: GET, POST, PUT, DELETE.</p>
	</div>

	@foreach($errors->all() as $error)
	<div class="error_message">
		<p>{{ $error }}</p>
	</div>
	@endforeach

	<div class="form">
		<form action="{{ action('PlayerController@store') }}" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="text" placeholder="Write your name" name="name">
			<button type="submit">Create</button>
		</form>
	</div>

	<table class="table">
	    <thead>
	      <tr>
	        <th class="title_table">id</th>
	        <th class="title_table">phrase</th>
	        <th class="title_table">action</th>
	      </tr>
	    </thead>
		@foreach($players as $player)
	    <tbody>
	      <tr>
	        <td class="table_content">{{$player->id}}</td>
	        <td class="table_content">{{$player->name}}</td>
	        <td class="table_content">

				<a href="{{ route('player.edit', ['id' => $player->id]) }}" type="button" class="action_link fa fa-pencil"></a>

				<form class="action_link" action="{{ action('PlayerController@destroy', ['id' => $player->id]) }}" method="POST">
					{{method_field('DELETE')}}
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<button type="submit" class="fa fa-trash-o"></button>
				</form>
	        </td>
	      </tr>
	    </tbody>
		@endforeach
	  </table>

@stop
