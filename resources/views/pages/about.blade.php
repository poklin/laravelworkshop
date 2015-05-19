@extends('app1')

@section('content')
	<h1>Contact Me!</h1>

	@if (count($people))

		<h3>People I Like:</h3>

		@foreach ($people as $person)
			<li>{{$person}}</li>
		@endforeach

	@endif
@stop

@section('footer')
	<script></script>
@stop