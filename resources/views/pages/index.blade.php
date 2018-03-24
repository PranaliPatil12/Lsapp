@extends('layout.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is an application using Laravel.</p>
        <p><a class="btm btn-primary btn-lg" href="/login" role="button">Login</a>
            <a class="btm btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
@endsection