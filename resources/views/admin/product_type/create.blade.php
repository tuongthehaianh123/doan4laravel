
@extends('layout.admin')
@section('main')
<form role="form" action="{{route('producttype.store')}}" method="post">
     @csrf
    <div class="form-group">
        <input type="hidden" class="form-control" id="" name="" placeholder="">
      </div>
      <div class="form-group">
        <label for="">tên loại</label>
        <input type="text" class="form-control" id="name"name="nametype" placeholder="">
       
      </div>
      <div class="form-group">
        <label for="">mã </label>
        <input type="text" class="form-control" id="type" name="id_type" placeholder="">
      </div>
      <div class="form-group" 
        <label for="">Miêu Tả </label>
        <textarea type="text" class="form-control" id="" name="description" ></textarea>
        <script type="text/javascript"> CKEDITOR.replace('description')</script> 
      </div>
     
      <div class="form-group">
        
        <p class="help-block">Example block-level help text here.</p>
      </div>
    
      <button type="submit" name="" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="{{route('producttype.index')}}">Quay lại<span></span></a>
     
</form>
@stop