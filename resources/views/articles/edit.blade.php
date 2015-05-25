@extends('app1')


@section('content')
	<h1>Edit Article Here</h1>
	<hr/>

	{!! Form::model($article,['method'=>'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!} 

		@include('articles._form',['submitBtn' => "Edit Article"])
	
	{!! Form::close() !!}

	@include ('errors.list')

@stop