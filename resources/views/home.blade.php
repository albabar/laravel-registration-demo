@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-1">{!! form($loginForm) !!}</div>
        <div class="col-md-4 col-md-offset-1">{!! form($registerForm) !!}</div>
    </div>
@endsection