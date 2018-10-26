@extends('layouts.master')

@section('content')

<div class="banner">
<div class="container"> 
        <h2>Contrary to popular belief, Lorem Ipsum simply</h2>
        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
    </div>
</div>
<div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
        <div class="container">
            <div class="grid_3 grid_5">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        @foreach ($newestCategories as $category)
                            <li role="presentation" class="{{ $loop->iteration == 1 ? 'active' : '' }}"><a href="#cate-{{ $category->id }}" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">
                                {{ ucwords($category->name) }}
                            </a></li>
                        @endforeach
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        @foreach ($newestCategories as $category)
                            <div role="tabpanel" class="tab-pane {{ $loop->iteration == 1 ? 'active' : 'fade' }}" id="cate-{{ $category->id }}" aria-labelledby="expeditions-tab">
                                @foreach($category->posts as $post)
                                    @if ($loop->iteration == 4)
                                        @break
                                    @endif
                                    <div class="col-md-4 col-sm-5 tab-image">
                                        <a href="{{ route('post.show', $post->id) }}">
                                            <img src="{{ asset($post->image) }}" class="img-responsive" alt="Wanderer">
                                        </a>
                                    </div>
                                @endforeach
                                <div class="clearfix"></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- technology-left -->
    <div class="technology">
    <div class="container">
        <div class="col-md-9 technology-left">
        <div class="tech-no">
            <!-- technology-top -->
            
             <div class="tc-ch wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                
                    <div class="tch-img">
                        <a href="{{ route('post.show', $postsTopLike->first()->id) }}"><img width="734px" height="343px" src="{{ $postsTopLike->first()->image }}" class="img-responsive" alt=""></a>
                    </div>
                    
                    <h3><a href="{{ route('post.show', $postsTopLike->first()->id) }}">{{ $postsTopLike->first()->title }}</a></h3>
                    <h6>BY <a href="#">{{ $postsTopLike->first()->user()->first()->info->full_name }} </a> {{ $postsTopLike->first()->created_at }}.</h6>
                        <p>{{ $postsTopLike->first()->preview }}</p>
                    <div class="bht1">
                        <a href="{{ route('post.show', $postsTopLike->first()->id) }}">Continue Reading</a>
                    </div>
                    <div class="soci">
                        <ul>
                            <li>{{ $postsTopLike->first()->total_view }} <span class="fab fas fa-eye" style="font-size: 24px;"></span></li>
                            <li>{{ $postsTopLike->first()->total_like }} <span class="fas fa-thumbs-up" style="font-size: 24px;"></span></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <!-- technology-top -->
            <!-- technology-top -->
            <div class="w3ls">
                @php
                    $postsTopLike->shift()
                @endphp
                @foreach ($postsTopLike as $post)
                    <div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                         <div class="tc-ch">
                            <div class="tch-img">
                                <a href="{{ route('post.show', $post->id) }}">
                                <img src="{{ asset($post->image) }}" class="img-responsive" alt=""></a>
                            </div>
                        
                            <h3><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h3>
                            <h6>BY <a href="">{{ $post->user()->first()->info->full_name }}</a> {{ $post->created_at }}</h6>
                                <p>{{ str_limit($post->preview, 100, '...') }}</p>
                                <div class="bht1">
                                    <a href="{{ route('post.show', $post->id) }}">Read More</a>
                                </div>
                                <div class="soci">
                                    <ul>
                                        <li>{{ $post->total_view }} <span class="fab fas fa-eye" style="font-size: 24px;"></span></li>
                                        <li>{{ $post->total_like }} <span class="fas fa-thumbs-up" style="font-size: 24px;"></span></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
            <!-- technology-top -->
            @foreach($posts as $post)
                <div class="wthree">
                     <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                        <div class="tch-img">
                                <a href="{{ route('post.show', $post->id) }}"><img src="{{ asset($post->image) }}" class="img-responsive" alt=""></a>
                            </div>
                     </div>
                     <div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
                            <h3><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h3>
                            <h6>BY <a href="#">{{ $post->user()->first()->info->full_name }} </a>{{ $post->created_at }}.</h6>
                                <p>{{ str_limit($post->preview, 100, '...') }}</p>
                                <div class="bht1">
                                    <a href="{{ route('post.show', $post->id) }}">Read More</a>
                                </div>
                                <div class="soci">
                                    <ul>
                                        <li>{{ $post->total_view }} <span class="fab fas fa-eye" style="font-size: 24px;"></span></li>
                                        <li>{{ $post->total_like }} <span class="fas fa-thumbs-up" style="font-size: 24px;"></span></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                        
                     </div>
                        <div class="clearfix"></div>
                </div>
            @endforeach
            <div class="col-lg-10 col-lg-offset-1">
                {{ $posts->links() }}
            </div>
            </div>
        </div>
        <!-- technology-right -->
        <div class="col-md-3 technology-right">
                
                
                <div class="blo-top1">
                            
                    <div class="tech-btm">
                    <div class="search-1 wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
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
                                    
                                    <h5><a href="{{ route('post.show', $post->id) }}">{{ str_limit($post->title, 25, '...') }}</a> </h5>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        @endforeach
                        <div class="insta wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
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
