@extends('layouts.app')

@section('content')
	<h1>Add a Review<a href="/dashboard" class="btn btn-primary float-right">&laquo; Go Back</a></h1>
	 
	<hr>
	{!! Form::open(['url' => 'foo/bar', 'method' => 'POST']) !!}
    	{{Form::bsText('Name')}}
	{!! Form::close() !!}
@endsection