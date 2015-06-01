@extends('app1')

@section('content')

	<h1>Write a New Article</h1>
	
	<hr/>

	{!! Form::open(['url' => 'article']) !!} 

		@include('articles._form',['submitBtn' => "Add Article"])

	{!! Form::close() !!}

	@include ('errors.list')

@stop