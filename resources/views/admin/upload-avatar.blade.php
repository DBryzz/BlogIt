@extends('layouts.postLayout')
@section('title', 'Add Avatar')


@section('content')

<div class="card-body">

                    @include('layouts.flash')

                    
                    

                    <form action="/users/upload" method="post" enctype="multipart/form-data" >
                        @csrf
                        <input type="file" name="image" >
                        <input type="submit" value="Upload">
                    </form>

                </div>
@endsection