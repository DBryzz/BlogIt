@extends('layouts.postLayout')

@section('title', $post->title)


@section('content')

@if (session()->has('upload'))  

<div class="card-body">

    @include('layouts.flash')

    <form action="/upload" method="post" enctype="multipart/form-data" >
        @csrf
        <input type="file" name="image" >
        <input type="submit" value="Upload">
    </form>

</div>
    
@endif

@include('partials.summary')

@endsection