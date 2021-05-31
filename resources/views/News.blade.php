@extends('layout.site')
@section('main')
<div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Search</h4>
                            <form action="#">
                                <input type="text" placeholder="Search . . .  ">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                  
                        <div class="recent-post">
                            <h4>Recent Post</h4>
                            @foreach($news as $item)
                            <div class="recent-blog">
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="{{url('public/Home/imges')}}/{{$item->image}}" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>{{$item->title}}...</h6>
                                        <p>Fashion <span>- May 19, 2019</span></p>
                                    </div>
                                </a>
                               
                            </div>
                            @endforeach
                        </div>
                   </div>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                    @foreach($news as $item)
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="{{url('public/Home/imges')}}/{{$item->image}}" alt="" >
                                </div>
                                <div class="bi-text">
                                    <a href="{{route('chitietnews',$item->id)}}">
                                        <h5 >{{$item->title}}</h5>
                                    </a>
                                    <p>travel <span>{{$item->create_at}}</span></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                         <div class="col-lg-12">
                            <div class="loading-more">
                                <i class="icon_loading"></i>
                                <a href="#">
                                    Loading More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop()