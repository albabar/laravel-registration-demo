@extends('master')

@section('content')
    <h2>Hello {{Auth::user()->name}}, you're at protected area now.</h2>
@endsection