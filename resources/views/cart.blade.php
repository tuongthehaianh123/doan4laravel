@extends('layout.site')
@section('main')
<section class="shopping-cart spad">
        <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
            
                <div class="col-lg-12">
                
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th><i class="ti-close"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach(Cart::Content() as $item)
                                <tr>
                             
                                    <td class="cart-pic first-row"><img src="{{url('public/Home/imges')}}/{{$item->options->img}}"width="50px" alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>{{$item->name}}</h5>
                                    </td>
                                    <td class="p-price first-row">{{number_format($item->price)}}đ</td>
                                    <td class="qua-col first-row">
                                        <div class="quantity">  
                                        <form action=" {{URL::to('/update-cart-quantity')}}" method="POST">
                                        {{csrf_field()}}
                                            <div class="pro-qty"><span class="dec qtybtn"></span>
                                                <input type="text" name="cart_quantity" value=" {{$item->qty}}" >
                                                <span class="inc qtybtn"></span></div>
                                            <input type="submit" value="update" name="updatecart" class="btn btn-default btn-sm"  >
                                            <input type="hidden" value="{{$item->rowId,$item->qty}}" name="rowIdcart" class="btn btn-default btn-sm" >
                                           
                                            </form>
                                        </div>
                                    </td>
                                    <td class="total-price first-row">{{number_format($item->price*$item->qty)}}đ</td>
                                    <td class="close-td first-row" ><a href="{{route('delete',$item->rowId,$item->qty)}}">
                                    <i class="ti-close" style="color: black;"></i>
                                    </a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="{{route('home.shop')}}" class="primary-btn continue-shop">Continue shopping</a>
                                
                                <a href="" class="primary-btn up-cart">Update cart</a>
                            </div>
                            <div class="discount-coupon">
                                <h6>Discount Codes</h6>
                                <form action="#" class="coupon-form">
                                    <input type="text" placeholder="Enter your codes">
                                    <button type="submit" class="site-btn coupon-btn">Apply</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                  
                                    <li class="cart-total">Total <span>{{number_format(Cart::subtotal(0,'.',''))}}đ</span></li>
                                </ul>
                                <a href="{{route('dathang')}}" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
