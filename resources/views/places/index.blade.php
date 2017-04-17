@extends('layouts.app')
@section('content')

	<div class="notice">
	  <p>This search shows the type of relationships between tables "one-to-many". In this example I use laravel Query Builder.</p>
	</div>

	<div class="form">	
		<form action="{{ route('places.index') }}" method="GET" role="form">
				<select name="category">
					<option value="">All categories</option>
					<option value="1">Entertaiment</option>
					<option value="2">Art</option>
				</select>
				<select name="direction">
					<option value="">All directions</option>
					<option value="1">Bar</option>
					<option value="2">Club</option>
					<option value="3">Teater</option>
					<option value="4">Museum</option>
				</select>
			<button type="submit">Search</button>
		</form>	
	</div>

	<table class="table">
	    <thead>
	      <tr>
	        <th class="title_table">id</th>
	        <th class="title_table">place</th>
	      </tr>
	    </thead>
		@foreach($search as $result)
		    <tbody>
		      <tr>
		        <td class="table_content">{{$result->id}}</td>
		        <td class="table_content">{{$result->name}}</td>
		      </tr>
		    </tbody>
	    @endforeach
	</table>

@stop