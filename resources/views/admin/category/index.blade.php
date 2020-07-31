@extends('layouts.app')
@section('content')
    <div class="col-md-3">
        <form action="{{ URL::route('category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Add category</label>
                <input required type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Add category">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    <div class="col-md-8">
        @if(session()->has('success'))
            <div class="alert alert-success }}">
                {!! session()->get('success') !!}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a type="button" href="{{ URL::route('category.edit',$category->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        {{--  AJAX BUT to be FAIL--}}
                        {{--  <a id="delete-user" type="button" user-id="{{$category->id}}" class="btn btn-danger">Delete</a>--}}
                        <form action="{{ URL::route('category.destroy',$category->id) }}" method="post">
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
