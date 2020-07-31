@extends('layouts.app')
@section('content')
    <div class="col-md-8 p-3  mx-auto">
        <h1>{{$post->title}}</h1>
        <br>
        <span>
            {!! $post->content !!}
        </span>
    </div>
@endsection
