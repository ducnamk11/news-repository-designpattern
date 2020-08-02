@extends('layouts.home')
@section('content')

    <div class="col-md-9 p-3  ">
        <div class="row">
            <div class=" col-md-8 p-2">
                <h1>Kết quả tìm kiếm:</h1>
                <br> <br> <br>
                @foreach($searchs as $s )
                    <h5>
                        <a class="link-a" href="{{URL::route('post.detail',[ 'id'=>$s->id])}}">
                            {{$s->title}}
                        </a>
                    </h5>
                    <hr class="cm-hr">
                @endforeach
            </div>
            <div class="  col-md-4 p-2">
            </div>
        </div>
    </div>
    <div class="col-md-3 p-3 border-left-5">
        <h3>Chuyên mục</h3>
        <hr class="cm-hr">
    </div>

@endsection
