@extends('layouts.app')
@section('content')

<div class="notice">
  <p>Confidentiality and safety. All of this can encryption. Enter any password please and click on button encryption.</p>
</div>

@foreach($errors->all() as $error)
<div class="error_message">
	<p>{{ $error }}</p>
</div>
@endforeach

<div>

	<div class="form">
		<form action="{{ action('PasswordController@store') }}" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="text" name="password">
			<button type="submit">Encryprion</button>
		</form>
	</div>

	<table class="table">
	    <thead>
	      <tr>
	        <th class="title_table">id</th>
	        <th class="title_table">encryption password</th>
	      </tr>
	    </thead>
		@foreach($passwords as $password)
		    <tbody>
		      <tr>
		        <td class="table_content">{{ $password->id }}</td>
		        <td class="table_content">{{ $password->password }}</td>
		      </tr>
		    </tbody>
	    @endforeach
	</table>

</div>

@stop