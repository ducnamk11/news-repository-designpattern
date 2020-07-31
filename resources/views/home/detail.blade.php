@extends('layouts.home')
@section('content')
    <div class="col-md-8 p-3  mx-auto">
        <h2 class="detail-title">{{$post->title}}</h2>
        <br>
        <div class="author-detail">
            <div class="row">
                {{dd( $post->user->image )}}
                <div class="col-md-2">
                    <img src="" alt="">
                </div>
                <div class="col-md-6">1</div>
                <div class="col-md-4">1</div>
            </div>
        </div>
        <p>
            {!! $post->content !!}}
        </p>
    </div>
@endsection
