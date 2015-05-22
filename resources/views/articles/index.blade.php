@extends('app1')

@section('content')

	<h1>Articles</h1>
	<hr/><br/>

	@foreach ($articles as $article) 
		<article>

	    	<!-- <h2><a href="{{ action('ArticlesController@show',$article['id'] ) }}">{{ $article['title'] }}</a></h2> -->
	    	<h2><a href="{{ url('/article',$article['id'] ) }}">{{ $article['title'] }}</a></h2>

	    	<div class="body">{{ $article['body'] }}</div>

		</article>

	@endforeach

@stop