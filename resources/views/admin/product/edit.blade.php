
@extends('layout.admin')
@section('main')
<form role="form" action="{{route('product.update',$product->id)}}" method="post">
     @csrf @method('PUT')
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
      </div>
      <div class="form-group">
        <label for="">tên loại</label>
        <input type="text" value="{{$product->name}}" class="form-control" id=""name="name" placeholder="">
       
      </div>
      <div class="form-group">
        <label for="">mã </label>
        <input type="text" value="{{$product->id_type}}" class="form-control" id="" name="id_type" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Miêu Tả </label>
        
        <input type="text"value="{{$product->description}}" class="form-control" id="" name="description" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Đơn giá </label>
        <input type="text"value="{{$product->unit_price}}"  class="form-control" id="" name="unit_price" placeholder="">
      </div>
      <div class="form-group">
        
        <label>Hình Ảnh</label>
        <input type="file" value="{{$product->image}}" class="form-control" id="" name="image" placeholder="">
      </div>
      <div class="form-group">
        
        <label>Hình Ảnh1</label>
        <input type="file" value="{{$product->image1}}" class="form-control" id="" name="image1" placeholder="">
      </div>
     
      <div class="form-group">
        
        <label>Hình Ảnh2</label>
        <input type="file" value="{{$product->image2}}" class="form-control" id="" name="image2" placeholder="">
      </div>
      <div class="form-group">
        
        <label>Hình Ảnh3</label>
        <input type="file" value="{{$product->image3}}" class="form-control" id="" name="image3" placeholder="">
      </div>
      <div class="form-group">
      
        
        <p class="help-block">Example block-level help text here.</p>
      </div>
    
      <button type="submit" name="" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="{{route('product.index')}}">Quay lại<span></span></a>
     
</form>
@stop