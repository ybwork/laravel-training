@extends('layouts.app')
@section('content')

<div class="rel_content">
	
	@foreach($seller as $seller)
		<p class="seller"><span>{{$seller->name}}</span> have this is products:</p>
	@endforeach

	<div class="products">	
		<ul>
			@foreach($products as $product)
				<li>{{$product->name}}</li>
			@endforeach
		</ul>
	</div>		

	<p class="instruction">Select other seller</p>

	<div class="button_select">

		@foreach($other_sellers as $other_sellers)
			<a href="{{ route('sellers.show', ['id' => $other_sellers->id]) }}">{{ $other_sellers->name }}</a>
		@endforeach

	</div>
</div>

@stop