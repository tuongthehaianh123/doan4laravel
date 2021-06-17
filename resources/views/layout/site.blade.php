<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi Hai Bin</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{url('public/site')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{url('public/site')}}/css/style.css" type="text/css">
    <script src="{{url('public/site')}}/js/jquery-3.3.1.min.js"></script>
  
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                       vuduyhaianh.123@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        0354647556
                    </div>
                </div>
                <div class="ht-right">
                @if(Auth::check())
                <a href="{{route('home.logout')}}" class="login-panel" style >Log Out </a>
                <a href="{{route('home.login')}}" class="login-panel" style >Hi:{{Auth::user()->full_name}}</a>
                
                 @else
                 <a href="{{route('home.login')}}" class="login-panel"><i class="fa fa-user"></i>Login</a>
                @endif
                  
                    <div class="lan-selector">
                  
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="{{url('public/site')}}/img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="{{url('public/site')}}/img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">Tiếng Việt </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a target="_blank"  href="https://www.facebook.com/yeuthoo/"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a target="_blank" href="https://www.instagram.com/haibin_1/"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo" style="width: 116%;">
                            <a href="{{route('home.index')}}">
                            
                            <img src="https://storage.googleapis.com/cdn.nhanh.vn/store/882/store_1486693237_882.png" alt="LOGO" style="
    margin: -12px 0px 0px 3px; background: black;
">
                            </a>
                        </div>
                    </div>


                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                        <form action="{{route('search')}}" method="get" id="searchform">
                            <button type="button" class="category-btn">All Categories</button>
                            <div class="input-group">
                                <input type="text" name="keyy"placeholder="What do you need?" style="    margin: 14px 0 0 0px;">
                                <button type="submit" class="btn btn-primary">
                           <i class="fa fa-search"></i>
                                  </button>
                                  </form> 
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                           
                            <li class="cart-icon">
                                <a href="#">
                                    <i class="icon_bag_alt"></i>
                                    <span>{{Cart::count()}}</span>
                                </a>
                                <div class="cart-hover">
                                <div id="item-cart" >
                                    <div class="select-items">
                                        <table> 
                                            <tbody>
                                            @foreach(Cart::Content() as $item)
                                                <tr>
                                              
                                                    <td class="si-pic"><img src="{{url('public/Home/imges')}}/{{$item->options->img}}" width="50px" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <h6>{{$item->name}}</h6>
                                                            <p> {{number_format($item->price)}}đ x {{$item->qty}} </p>
                                                        </div>
                                                    </td>
                                                   
                                                    <td  class="si-close" > <a href="{{route('delete',$item->rowId)}}">
                                                        <i class="ti-close"></i>
                                                        </a>
                                                    </td>
                                                    </form>
                                                    
                                                </tr>
                                               
                                                @endforeach
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                    <a href="{{asset('delete/all')}}" class="primary-btn view-card">Delete All</a>
                                     <div class="select-total">
                                        <span>total:</span>
                                        <h5>{{number_format(Cart::subtotal(0,'.',''))}}đ</h5>
                                        
                                    </div>
                                    <div class="select-button">
                                        <a href="{{route('save-cart')}}" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                              
                            </li>
                            <li class="cart-price">{{number_format(Cart::subtotal(0,'.',''))}}đ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                        @foreach($type as $item)
                            <li class="active"><a href="/doan4/Product/{{$item->id}}">{{$item->nametype}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('home.index')}}">Home</a></li>
                        <li><a href="{{route('home.shop')}}">Shop</a></li>
                        <li><a href="#">Collection</a>
                            <ul class="dropdown">
                                <li><a href="#">Men's</a></li>
                                <li><a href="#">Women's</a></li>
                                <li><a href="#">Kid's</a></li>
                            </ul>   
                        </li>
                        <li><a href="{{route('news')}}" style="font-size: 13px;">News</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./blog-details.html">Blog Details</a></li>
                                <li><a href="./shopping-cart.html">Shopping Cart</a></li>
                                <li><a href="./check-out.html">Checkout</a></li>
                                <li><a href="./faq.html">Faq</a></li>
                                <li><a href="{{route('home.Signin')}}">Register</a></li>
                                <li><a href="{{route('home.login')}}">Login</a></li>
                            </ul>
                        </li>
                    </ul>   
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    @yield('main')
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                        <a href="{{route('home.index')}}">
                            
                            <img src="https://storage.googleapis.com/cdn.nhanh.vn/store/882/store_1486693237_882.png" alt="LOGO" style="
    margin: -12px 0px 0px 3px; background: black; width: 138px;
">
                            </a>
                        </div>
                        <ul>
                            <li>Address: TRỤ SỞ CHÍNH: 48 PHỐ HUẾ- TP. HÀ NỘI VĂN PHÒNG GIAO DỊCH: 444 XÃ ĐÀN - ĐỐNG ĐA - TP. HÀ NỘI</li>
                            <li>Phone:+0354647556</li>
                            <li>Email:Vuduyhaianh.123@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Information</h5>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Serivius</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>My Account</h5>
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Shopping Cart</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Join Our Newsletter Now</h5>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Enter Your Mail">
                            <button type="button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="{{url('public/site')}}/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
  
</body>

    <script src="{{url('public/site')}}/js/bootstrap.min.js"></script>
    <script src="{{url('public/site')}}/js/jquery-ui.min.js"></script>
    <script src="{{url('public/site')}}/js/jquery.countdown.min.js"></script>
    <script src="{{url('public/site')}}/js/jquery.nice-select.min.js"></script>
    <script src="{{url('public/site')}}/js/jquery.zoom.min.js"></script>
    <script src="{{url('public/site')}}/js/jquery.dd.min.js"></script>
    <script src="{{url('public/site')}}/js/jquery.slicknav.js"></script>
    <script src="{{url('public/site')}}/js/owl.carousel.min.js"></script>
    <script src="{{url('public/site')}}/js/main.js"></script>


    
</html>