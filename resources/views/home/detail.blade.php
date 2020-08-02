@extends('layouts.home')
@section('content')
    <div class="col-md-8 p-3  mx-auto">
        <h2 class="detail-title">{{$post->title}}</h2>
        <br>
        <div class="author-detail">
            <div class="row">
                <div class="col-md-1">
                    <img class="author-avt" src="https://www.w3schools.com/howto/img_avatar.png" alt="a">
                </div>
                <div class="col-md-6 pl-5 author-name">
                    <span class=" ">{{$post->user->name}}</span>
                    <button type="button" class="btn btn-outline-primary btn-sm ml-4">Follow</button>
                    <br>
                    <span>{{date_format($post->created_at, 'Y-m-d H:i:s') }}</span>
                </div>
                <div class="col-md-5">1</div>
            </div>
        </div>
        <p>
            {!! $post->content !!}
        </p>
    </div>
@endsection
