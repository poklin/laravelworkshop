@extends('app1')

@section('content')
	
	<h1>{{ $article['title'] }}</h1>

		<article>

	    	<div class="body">{{ $article['body'] }}</div>

		</article>

    @unless($article->tags->isEmpty())
        <h5>Tag:</h5>
        <ul>
            @foreach($article->tags as $tag)
                <li>{{ $tag->name  }}</li>
            @endforeach
        </ul>
    @endunless

@stop

