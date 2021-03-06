@extends('layout.site')
@section('main')
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
<section class="checkout-section spad">
        <div class="container">
            <form action="{{route('dathang')}}"  method="post" class="checkout-form">
            {{csrf_field()}}
                <div class="row">
                <!-- @if(Auth::check())
                <a href="{{route('home.logout')}}" class="login-panel" style >Log Out </a>
                <a href="{{route('home.login')}}" class="login-panel" style >Hi:{{Auth::user()->full_name}}</a>
                
                 @else
                 <a href="{{route('home.login')}}" class="login-panel"><i class="fa fa-user"></i>Login</a>
                @endif -->
                <!-- @if(Auth::check())
                <a href="{{route('home.login')}}" class="login-panel"><i class="fa fa-user"></i>Login</a>
                <a href="{{route('home.logout')}}" class="login-panel" style >Log Out </a>
                @else -->
                <!-- @endif -->
                @if(Auth::check())
               
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="{{route('home.login')}}" class="content-btn">Click Here To Login</a>
                        </div>
                        <h4>Biiling Details</h4>
                        <div class="row">
                            <div class="col-lg-12">
                                <label for="fir">Name<span>*</span></label>
                                <input type="text"  value="{{$kh->name}}" name="name" placeholder=" Ho va ten" require>
                            </div>
   
                            <div  class="col-lg-6">
                                <label >Gender</label> 
                                <input   value="{{$kh->gender}}"  id="gender" type="radio" class="input-radio" name="gender" checked="checked" style="width:10%"  value="nam" /><span style="margin-right: 10%">Nam</span> 
                                <input  value="{{$kh->gender}}"   id="gender" type="radio" class="input-radio" name="gender" checked="checked" style="width:10%"  value="n???" /><span style="margin-right: 10%">N???</span> 
                  
                            </div>
                            <div class="col-lg-12">
                                <label for="street"> Address<span>*</span></label>
                                <input    value="{{$kh->address}}" type="text" id="street" class="street-first" name="address">
                                
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Email Address<span>*</span></label>
                                <input  value="{{$kh->email}}"  type="text" id="email" name="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Phone<span>*</span></label>
                                <input  value="{{$kh->phone_number}}"  type="text" id="phone" name="phone">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Not<span>*</span></label>
                                <input   value="{{$kh->note}}" type="text" id="town" name="not">
                            </div>
                           
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                        Create an account?
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="checkout-content">
                            <a href="{{route('home.Signin')}}" class="content-btn">Click Here To Singnin</a>
                        </div>
                    @endif
                
                    <div class="col-lg-6">
                    <div class="checkout-content">
                            <a href="{{route('home.login')}}" class="content-btn">Click Here To Login</a>
                        </div>
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                
                                    <li>Product <span>Total</span></li>
                                    @foreach(Cart::Content() as $item)

                                    <li class="fw-normal"><img src="{{url('public/Home/imges')}}/{{$item->options->img}}" width="50px" alt=""> {{$item->name}} x{{$item->qty}} <span> {{number_format($item->price)}}</span></li>
                                    @endforeach
                                    <li class="total-price">Total <span>{{number_format(Cart::subtotal(0,'.',''))}}$</span></li>
                                </ul>
                                <div class="payment-check">
                                <div class="">
                                        <label for="pc-check">
                                       *Address:Headquarters: 48 HUE STREET - City HANOI TRANSACTION OFFICE: 444 Commune DAAN - DONG DA - City. HANOI
                                            
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-check">
                                        Payment on delivery
                                            <input type="checkbox" id="pc-check" value="COD" name="payment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="pc-item">
                                        <label for="pc-paypal">
                                            Banking
                                            <input type="checkbox" id="pc-paypal" value="ATM" name="payment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="order-btn">
                                    <button type="submit" class="site-btn place-btn">Place Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    
@stop()
<!-- @section('js')
<script>
    function UpdateCart(qty,id){
        console.log();
        console.log)
           }
       );
    }

</script>
@stop
   -->
