@extends('layouts.app')
@section('content')
    <form class="col-md-8" method="post" action="{{URL::route('post.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Title</label>
            <input required name="title" type="text" class="form-control" id="exampleInputPassword1"
                   placeholder="Title">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input name="image" type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
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
            <textarea name="content"></textarea>
            <script>
                CKEDITOR.replace('content');
            </script>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
