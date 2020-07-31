@extends('layouts.app')
@section('content')
    <div class="col-md-1 mt-2">
        <a href="{{URL::route('post.create')}}"  class="btn btn-primary"> add</a>
    </div>
    <div class="col-md-10 ">
        @if(session()->has('success'))
            <div class="alert alert-success }}">
                {!! session()->get('success') !!}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">Author</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->user->name}}</td>
                    <td>
                        <a type="button" href="{{ URL::route('post.show',$post->id) }}"
                           class="btn btn-secondary ">Detail</a>
                    </td>
                    <td>
                        <a type="button" href="{{ URL::route('post.edit',$post->id) }}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        {{--  AJAX BUT to be FAIL--}}
                        {{--  <a id="delete-user" type="button" user-id="{{$u->id}}" class="btn btn-danger">Delete</a>--}}
                        <form action="{{ URL::route('post.destroy',$post->id) }}" method="post">
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
