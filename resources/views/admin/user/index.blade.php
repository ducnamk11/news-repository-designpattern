@extends('layouts.app')
@section('content')
    <div class="col-md-3">
        <form action="{{ URL::route('user.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Add User</label>
                <input required type="text" name="name" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Add User">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Add Email</label>
                <input required type="email" name="email" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp"
                       placeholder="Add Email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input required type="password" name="password" class="form-control"
                       placeholder="Add Password">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    <div class="col-md-9">
        @if(session()->has('success'))
            <div class="alert alert-success }}">
                {!! session()->get('success') !!}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">Detail</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $u)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                        <a type="button" href="{{ URL::route('user.show',$u->id) }}"
                           class="btn btn-secondary ">Detail</a>
                    </td>
                    <td>
                        <a type="button" href="{{ URL::route('user.edit',$u->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        {{--  AJAX BUT to be FAIL--}}
                        {{--  <a id="delete-user" type="button" user-id="{{$u->id}}" class="btn btn-danger">Delete</a>--}}
                        <form action="{{ URL::route('user.destroy',$u->id) }}" method="post">
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                            {{method_field('DELETE')}}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
