@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ URL::route('user.update',$user->id) }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email" name="email" value="{{$user->email}}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                   name="password" value="{{$user->password}}">
        </div>
        {{method_field('PUT')}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
