@extends('layouts.master')
@section('content')
<!-- technology-left -->
<div class="technology">
    <div class="container">
        <div class="col-md-9 technology-left">
            <div class="agileinfo">
                <h2 class="w3">{{ $post->title }}</h2>
                <div class="single">
                    <img width="100%" src="{{ asset($post->image) }}" class="img-responsive" alt="">
                    <div class="b-bottom">
                        <h5 class="top">{{ $post->preview }}</h5>
                        <p class="sub">{{ $post->content }}</p>
                        <p>{{ $post->created_at }}<a class="span_link" href="{{ route('like', $post->id) }}"><span class="glyphicon glyphicon-thumbs-up" style="font-size: 15px;"></span>{{ $post->total_like }} </a><a class="span_link" href="#"><span class="glyphicon glyphicon-eye-open" style="font-size: 15px;"></span>{{ $post->total_view }}</a></p>
                    </div>
                </div>
                <div class="response">
                    <h4>Responses</h4>
                    @foreach ($comments as $comment)
                        <div class="media response-info">
                            <div class="media-left response-text-left">
                                <a href="#">
                                <img src="https://images-na.ssl-images-amazon.com/images/I/51k%2BOz9fUKL._SY355_.jpg" class="img-responsive" alt="">
                                </a>
                            </div>
                            <div class="media-body response-text-right">
                                <p>{{ $comment->content }}
                                </p>

                                <ul>
                                    <li>{{ $comment->created_at }}</li>
                                </ul>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    @endforeach
                </div>
                @auth
                    <div class="coment-form">
                        <h4>Leave your comment</h4>
                        <form action="{{ route('create-comment', $post->id) }}" method="post">
                            @csrf
                            <textarea name="content" placeholder="Your Comment" required=""></textarea>
                            <input type="submit" value="Submit Comment">
                        </form>
                    </div>
                @endauth
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- technology-right -->
        <div class="col-md-3 technology-right">
            <div class="blo-top1">
                <div class="tech-btm">
                    <div class="search-1">
                        <form action="#" method="post">
                            <input type="search" name="Search" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                    <h4>Relate Posts </h4>
                    @foreach ($relarePosts as $element)
                    <div class="blog-grids">
                        <div class="blog-grid-left">
                            <a href="{{ route('post.show', $element->id) }}">
                            <img src="{{ asset($element->image) }}" class="img-responsive" alt="">
                            </a>
                        </div>
                        <div class="blog-grid-right">
                            <h5>
                                <a href="{{ route('post.show', $element->id) }}">{{ $element->title }}</a>
                            </h5>
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
</div>
@endsection