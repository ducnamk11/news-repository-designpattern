@extends('layouts.app')
@section('content')
    <div class="card" style="width: 48rem;">
        <div class="card-body">
            <h5 class="card-title">{{  $category->name }}</h5>
            <p class="card-text"> {{  $category->content }}</p>
        </div>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>

@endsection
