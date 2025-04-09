@extends('layouts.master')
@section('title')
    <h2>Welcome to Our Website</h2>
@endsection

@section('content')
<p class="lead">This is the home page of our application.</p>
<p>Click the button below to register:</p>
<a href="{{ route('register') }}" class="btn btn-primary">Register Now</a>

@endsection






