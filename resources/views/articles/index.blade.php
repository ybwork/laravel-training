@extends('layouts.app')
@section('content')

<div class="container">
	<div class="notice">
		  <p>Pagination is used in web applications for break  large data set into pages, and includes a navigation block to navigate to other pages. On each page will be 2 articles.</p>
	</div>
	<div class="articles_wrap">
		    @foreach ($articles as $article)
		        <h3>{{ $article->title }}</h3>
		        <p>{{ $article->text }}</p>
		    @endforeach
		{{ $articles->render() }}
	</div>
</div>

@stop