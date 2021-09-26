@extends('layouts.postLayout')
@section('title', 'Home')


@section('content')

@foreach ($posts as $post)
    @include('partials.summary')
@endforeach

@endsection