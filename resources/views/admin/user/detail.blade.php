@extends('layouts.app')
@section('content')
    <div class="card" style="width: 48rem;">
        <img class="card-img-top" style="height: 90px; width: 90px"
             src="https://www.vasport.vn/public/admin/img/avatar.png.webp" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{  $user->name }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{  $user->name }}</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>

@endsection
