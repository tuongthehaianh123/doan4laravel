
@extends('layout.site')
@section('main')
<section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-inner">
                        <div class="blog-detail-title">
                            <h2>{{$news->title}}</h2>
                            <p>travel <span>-{{$news->create_at}}</span></p>
                        </div>
                        <div class="blog-large-pic">
                            <img src="{{url('public/Home/imges')}}/{{$news->image}}"  alt="">
                        </div>
                        <div class="blog-detail-desc">
                            <p>
                            {{$news->content}}
                            </p>
                        </div>
                       
                        <div class="blog-more">
                       
                            <div class="row">
                            @foreach($news_tuongtu as $item)
                           
                                <div class="col-sm-4">
                                <a href="{{route('chitietnews',$item->id)}}" class="prev-blog">
                                    <img src="{{url('public/Home/imges')}}/{{$item->image}}" alt="">
                                    </a>
                                </div>
                                
                                @endforeach
                            </div>
                        </div>
                        <p>Sum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                            et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea commodo consequat. Duis aute irure Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                        <div class="tag-share">
                            <div class="details-tag">
                                <ul>
                                    <li><i class="fa fa-tags"></i></li>
                                    <li>Travel</li>
                                    <li>Beauty</li>
                                    <li>Fashion</li>
                                </ul>
                            </div>
                            <div class="blog-share">
                                <span>Share:</span>
                                <div class="social-links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post">
                            <div class="row">
                            @foreach($news_truoc_sau as $item)
                                <div class="col-lg-5 col-md-6">
                                    <a href="{{route('chitietnews',$item->id)}}" class="prev-blog">
                                        <div class="pb-pic">
                                            <i class="ti-arrow-left"></i>
                                            <img src="{{url('public/Home/imges')}}/{{$item->image}}" alt="">
                                        </div>
                                        <div class="pb-text">
                                            <span>Previous Post:</span>
                                            <h5>{{$item->title}}</h5>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                            </div>
                        </div>
                        
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="Messages"></textarea>
                                        <button type="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop()