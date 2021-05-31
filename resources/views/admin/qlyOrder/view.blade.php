
@extends('layout.admin')
@section('main')

   <div class="table-agile-info">

<div class="table-agile-info">
  
  <div class="panel panel-default">
    <div class="panel-heading" style="text-align: center;">
   <h2> Customer </h2>
    </div>
   
    
    <div class="table-responsive">
                     
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <!-- <th>Tên sản phẩm</th> -->
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Date of Order </th>
            <th>Delivery Method</th>
            <th>Note</th>
         
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
   
          <tr>
           
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$bil->id_customer}}</td>
            <td>{{$bil->cus->name}}</td>
            <td>{{$bil->cus->gender}}</td>
            <td>{{$bil->cus->address}}</td>
            <td>{{$bil->cus->phone_number}}</td>
            <td>{{$bil->date_order}}</td>
            <td>{{$bil->payment}}</td>
            <td>{{$bil->note}}</td>
           
           
          

          </tr>
         
        </tbody>
      </table>

    </div>
    <footer class="panel-footer">
      <div class="row">
      </div>
    </footer>
  </div>
  <br>
  <div class="panel panel-default">
    <div class="panel-heading" style="text-align: center;">
    <h2>List order details </h2>
    </div>
   
    
    <div class="table-responsive">
                     
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <!-- <th>Tên sản phẩm</th> -->
            <th>Product Name </th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total Money </th> 
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
        @foreach($bd as $item)

          <tr>
           
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$item->sp->name}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{number_format($item->unit_price)}}đ</td>
            <td>{{number_format($item->unit_price*$item->quantity)}}đ</td>
          
            
          </tr>
         @endforeach
        </tbody>
      </table>
    
    </div>
    
    <footer class="panel-footer">
      <div class="row">
      </div>
      <div style="margin-left: 931px;">
      <h4>Free Ship:100%</h4>
      <h4>Payment Total:{{number_format($bil->total)}}đ</h4>
      <a target="_blank" href="{{url('/print-order/'.$bil->id)}}">Print Order</a>
      </div>
    </footer>
 
  </div>
</div>
@stop