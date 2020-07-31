@extends('layouts.app')
@section('content')
    <form method="POST" action="{{ URL::route('category.update',$category->id) }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email" name="name" value="{{$category->name}}">
        </div>

        {{method_field('PUT')}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
