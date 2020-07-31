<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com"/>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="https://cdn.ckeditor.com/ckeditor5/21.0.0/classic/ckeditor.js"></script>
    <link rel="stylesheet" href="{{asset('assets/main.css')}}">

</head>
<body>
<nav class="home-nav navbar navbar-light   justify-content-between">
   <span>
        <a href="{{URL::route('home')}}" class="navbar-brand font-weight-bold">M</a>
        </span>
    <form class="form-inline">
        <input class="search form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    </form>
</nav>
<div class="container ">
    <div class="row ">
        @yield('content')
    </div>
</div>
</body>
<script src="{{asset('assets/main.js')}}"></script>
</html>
