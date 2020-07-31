@extends('layouts.home')
@section('content')
    <div class="col-md-9 p-3  ">
        <div class="row">
            <div class=" col-md-8 p-2">
                <img class="first-image" src="{{url('images/'.$featurest->image)}}" alt="helláoá">
                <h2><a class="link-a"
                       href="{{URL::route('post.detail',[ 'id'=>$featurest->id])}}">{{$featurest->title}}</a></h2>
                <h6><a class="link-a"
                       href="{{URL::route('post.detail',[ 'id'=>$featurest->id])}}">{!!  substr(strip_tags($featurest->content),0,310) !!}
                        ...</a></h6>
            </div>
            <div class="  col-md-4 p-2">
                @foreach($posts as $p )
                    <h5>
                        <a class="link-a" href="{{URL::route('post.detail',[ 'id'=>$p->id])}}">
                            {{$p->title}}
                        </a>
                    </h5>
                    <hr class="cm-hr">
                @endforeach
            </div>

        </div>
    </div>
    <div class="col-md-3 p-3 border-left-5">
        <h3>Hot New</h3>
        <hr class="cm-hr">
        @foreach($categories as $c)
            <h3><a class="link-a" href="">
                    <span class="category-number">{{$loop->iteration}} </span>
                    <span class="category">{{$c->name}}</a></span>
            </h3>
        @endforeach

        <h3>Chuyên mục</h3>
        <hr class="cm-hr">
        @foreach($categories as $c)
            <h3>
                <a class="link-a" href="">
                    <span class="category-number">{{$loop->iteration}} </span>
                    <span class="category">{{$c->name}}</span>
                </a>
            </h3>
        @endforeach
    </div>
    {{--    HOT NEWEST--}}
    <div class="col-md-12  ">
        <h3>Hot New</h3>
    </div>

    @foreach($new as $n)
        <div class="col-md-3 mt-5 ">
            <img class="new-image" src="{{url('images/'.$n->image)}}" alt="helláoá">
            <a class="link-a"
               href="{{URL::route('post.detail',[ 'id'=>$n->id])}}">{!!  substr(strip_tags($n->title),0,310) !!}
                ...</a>
        </div>
    @endforeach

@endsection
