@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center" style="margin-top: 10px; margin-bottom: 10px;">
      <h3 class="display-4">Hello, world!</h3>
      <p class="lead">Welcome to Revit. Here you can find reviews about all the items you see on various online stores from actual buyers. Click on <a href="{{route('register')}}">Register</a> to Sign Up or <a href="{{route('login')}}">Login</a> to revit.com and add share your experiences of online shopping with the world.</p>
    </div>
    <hr>
    <h2>Available Reviews</h2>
    @include('inc.listings')
@endsection