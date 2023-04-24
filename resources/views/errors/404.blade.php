@extends('frontend.layouts.error-master')
@section('content')
<div class="container">

    <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <h1>404</h1>
        <h2>The page you are looking for doesn't exist.</h2>
        <a class="go-back" href="{{ route('welcome') }}">Back to home</a>
        <img src="{{ asset('assets/img/logo.png') }}" class="img-fluid py-5" alt="Page Not Found">
    </section>

</div>
@endsection
