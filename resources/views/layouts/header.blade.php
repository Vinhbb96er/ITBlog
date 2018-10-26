<!DOCTYPE HTML>
<html>
<head>
<title>Style Blog a Blogging Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Style Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,600,700' rel='stylesheet' type='text/css'>
<link href="/css/style.css" rel='stylesheet' type='text/css' />  
<script src="/js/jquery-1.11.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<!-- animation-effect -->
<link href="/css/animate.min.css" rel="stylesheet"> 
<script src="/js/wow.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

<style type="text/css">
    .no-result {
        padding: 2em 2em 0 2em;
        text-align: center;
        color: #137ef3;
        text-shadow: 2px 2px #a29c99;
        font-size: 50px;
    }

    .img-list {
        height: 220px !important;
    }
</style>
</head>
<body>
<div class="header" id="ban">
        <div class="container" style="margin: 0 0 0 50px; padding: 0;">
            <div class="head-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
                <div class="header-search">
                        <div class="search">
                            <input class="search_box" type="checkbox" id="search_box">
                            <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                            <div class="search_form">
                                {{ Form::open(['route' => 'search', 'method' => 'GET']) }}
                                    <input type="text" name="search_value" placeholder="Search...">
                                    <input type="submit" value="Send">
                                {{ Form::close() }}
                            </div>
                        </div>
                </div>
            </div>
            <div class="header_right wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-7" id="link-effect-7">
                        <ul class="nav navbar-nav">
                            <li class="active act"><a href="{{ route('home') }}">Home</a></li>
                            @foreach ($categoriesShare as $category)
                                <li><a href="{{ route('category.show', $category->id) }}">{{ $category->name }}</a></li>
                            @endforeach
                            @auth
                                <li><a href="{{ route('post.create') }}">Create post</a></li>
                            @endauth
                        </ul>
                    </nav>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            </div>

            <div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight; float: right !important;">
                @auth
                    <label>{{ (Auth::user()->info) ? Auth::user()->info->full_name : Auth::user()->email }}</label>
                    <a class="btn btn-1 btn-danger"href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-1 btn-primary">Log in</a>
                @endauth  
                
            </div>
            <div class="clearfix"> </div> 
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="logo">
                <h1><a href="{{ route('home') }}">IT BLOG</a></h1>
                <p><label class="of"></label>LET'S MAKE A PERFECT BLOG<label class="on"></label></p>
            </div>
        </div>
    </div>
