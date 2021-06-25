@extends('layout.site')
@section('main')

<section class="checkout-section spad">
        <div class="container">
            <form action="http://127.0.0.1:8080/doan4/dathang" method="post" class="checkout-form">
            <input type="hidden" name="_token" value="IbaWriJnt9w9XSRzUpOgKeligHrgW2A6oNW3bwMF">
                <div class="row">
                <!--                  <a href="http://127.0.0.1:8080/doan4/login" class="login-panel"><i class="fa fa-user"></i>Login</a>
                 -->
                <!--  -->
                <!--  -->
                      
                                    
                   
                        <div class="place-order">
                            <h4>Your Order</h4>
                            <div class="order-total">
                                <ul class="order-table">
                                <li>Product :{{$bil->id}} <span>Total</span></li>
                                <li>Orderer : {{$bil->cus->name}}</li>
                                <li>Address  :{{$bil->cus->address}}  </li>
                                <li>Phone   :{{$bil->cus->phone_number}}</li>
                                <li>Delivery Method: {{$bil->payment}}</li>	
                                <li>Date of Order: {{$bil->date_order}}</li>	
                                <li>Date of Order: {{$bil->note}}</li>	
                            @foreach($bd as $item)
                                   
                                  
                              
                                    <li>Product Name :{{$item->sp->name}}</li>
                                                                        <li class="total-price">Total <span>0đ</span></li>
                                         @endforeach                             
                                </ul>
                                <h4>Payment Total:{{number_format($bil->total)}}đ</h4>
                                <div class="payment-check">
                                <div class="">
                                        <label for="pc-check">
                                       *Address:TRỤ SỞ CHÍNH: 48 PHỐ HUẾ- TP. HÀ NỘI VĂN PHÒNG GIAO DỊCH: 444 XÃ ĐÀN - ĐỐNG ĐA - TP. HÀ NỘI
                                            
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                 
                                </div>
                                <div class="order-btn">
                                    <button style="background: red;" type="submit" class="site-btn place-btn">Order Cancellation </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
                   
@stop