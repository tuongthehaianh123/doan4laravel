@extends('layout.site')
@section('main')
<div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="map spad">
        <div class="container">
            <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.4586538481503!2d106.05559081486011!3d20.93408848604984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a52d9064e6c5%3A0x8fad2672613dac14!2zTmjDoCBOZ2jhu4kgTmfhu41jIEjDoA!5e0!3m2!1svi!2s!4v1621703330423!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
                <div class="icon">
                    <i class="fa fa-map-marker"></i>
                </div>
            </div>
        </div>
    </div>

    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-title">
                        <h4>Contacts Us</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is simply random text. It has roots in a piece of
                            classical Latin literature from 45 BC, maki years old.</p>
                    </div>
                    <div class="contact-widget">
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="ci-text">
                                <span>Address:</span>
                                <p>TRỤ SỞ CHÍNH: 48 PHỐ HUẾ- TP. HÀ NỘI
                                 VĂN PHÒNG GIAO DỊCH: 444 XÃ ĐÀN - ĐỐNG ĐA - TP. HÀ NỘI</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="ci-text">
                                <span>Phone:</span>
                                <p>0354647556</p>
                            </div>
                        </div>
                        <div class="cw-item">
                            <div class="ci-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="ci-text">
                                <span>Email:</span>
                                <p>vuduyhaianh.123@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="col-lg-6 offset-lg-1">
                    <div class="contact-form">
                    <form action="{{route('home.Signin')}}" method="post" class="checkout-form">
                    {{csrf_field()}}
                        <div class="leave-comment">
                            <h4>Leave A Comment</h4>
                            <p>Our staff will call back later and answer your questions.</p>
                            <form action="#" class="comment-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" name="fullname" placeholder="Your name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" name="email" placeholder="Your email">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea name="Cmt" placeholder="Your message"></textarea>
                                        <button type="submit" class="site-btn">Send message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </form>
                    </div>
                </div>
              
            </div>
        </div>
    </section>

@stop()