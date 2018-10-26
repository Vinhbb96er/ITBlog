@extends('layouts.master')

@section('content')
    <style type="text/css">
        .no-result {
            padding: 2em 2em 0 2em;
            text-align: center;
            color: #137ef3;
            text-shadow: 2px 2px #a29c99;
            font-size: 50px;
        }
    </style>

    <!-- technology-left -->
    <div class="technology">
    <div class="container">
        <div class="col-md-9 technology-left">
            <div class="blog">
        
            <h2 class="w3">{{ strtoupper($category->name) }}</h2>
            {{ $category->posts()->count() }} posts
            @php
                $postsRow = $posts->chunk(2);
            @endphp

            @forelse ($postsRow as $postRow)
                <div class="blog-grids1">
                    @foreach ($postRow as $post)
                        <div class="col-md-6 blog-grid">
                            <div class="blog-grid-left1">
                                <a href="{{ route('post.show', $post->id) }}"><img src="{{ asset($post->image) }}" alt=" " class="img-responsive"></a>
                            </div> 
                            <div class="blog-grid-right1">
                                <a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a>
                                <h4>{{ $post->created_at }}</h4>
                                <p>{{ $post->preview }}</p>
                            </div>
                            <div class="clearfix"> </div>
                            <div class="more m1">
                                <a class="btn effect6" href="{{ route('post.show', $post->id) }}">Learn More</a>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"> </div>
                </div>
            @empty
                <h2 class="no-result">No results</h2>
            @endforelse
            
            <nav class="paging">
                {{ $posts->appends(Request::all())->links() }}
            </nav>
        
    </div>
        </div>
        <!-- technology-right -->
        <div class="col-md-3 technology-right">
                
                
                <div class="blo-top1">
                            
                    <div class="tech-btm">
                    <div class="search-1">
                            {{ Form::open(['route' => 'search', 'method' => 'GET']) }}
                                <input type="search" name="search_value" placeholder="Type something...">
                                <input type="submit" value=" ">
                            {{ Form::close() }}
                        </div>
                    <h4>Most View Posts </h4>
                        @foreach ($postsTopView as $post)
                            <div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                                <div class="blog-grid-left">
                                    <a href="{{ route('post.show', $post->id) }}"><img src="{{ asset($post->image) }}" class="img-responsive" alt=""></a>
                                </div>
                                <div class="blog-grid-right">
                                    
                                    <h5><a href="{{ route('post.show', $post->id) }}">{{ str_limit($post->title, 20, '...') }}</a> </h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        @endforeach
                        <div class="insta">
                    <h4>Instagram</h4>
                        <ul>
                            
                            <li><a href="singlepage.html"><img src="/images/t1.jpg" class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="/images/m1.jpg" class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="/images/f1.jpg" class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="/images/m2.jpg" class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="/images/f2.jpg" class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="/images/t2.jpg" class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="/images/f3.jpg" class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="/images/t3.jpg" class="img-responsive" alt=""></a></li>
                            <li><a href="singlepage.html"><img src="/images/m3.jpg" class="img-responsive" alt=""></a></li>
                        </ul>
                    </div>
                    
                    <p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro</p>
                    <div class="twt">
                    
                        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag" style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>
                    </div>
                    
                    
                    
                </div>
                
            
        </div>
        <div class="clearfix"></div>
        <!-- technology-right -->
    </div>
@endsection
