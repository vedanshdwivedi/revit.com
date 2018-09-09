@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard
    <a class="btn btn-success float-right" href="/create">+ Add a Review</a>
    </h1>
    <hr>
    @include('inc.listings')
</div>
@endsection
