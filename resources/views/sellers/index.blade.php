@extends('layouts.app')
@section('content')

<div class="rel_content">
	<div class="notice">
	  <p>This is relationships table.They used for data integrity. In the example below relationship "one to many". For example: one seller may have a lot of goods. In this example I used Eloquent ORM. Check please.</p>
	</div>

	<p class="instruction">Select please seller</p>

	<div class="button_select">
		@foreach($sellers as $seller)
			<a href="{{ route('sellers.show', ['id' => $seller->id]) }}" class="">{{ $seller->name }}</a>
		@endforeach	
	</div>		
</div>

@stop