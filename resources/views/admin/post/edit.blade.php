@extends('layouts.app')
@section('content')
    <form class="col-md-8" method="post" action="{{URL::route('post.store')}}">
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input required name="title" type="text" class="form-control" id="exampleInputPassword1" placeholder="Title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select required multiple class="form-control" name="category_id" id="exampleFormControlSelect2">
                @foreach($categories as $c)
                    <option value="{{$c->id}}"> {{$c->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <textarea required name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
