
@extends('layout.admin')
@section('main')
<form role="form" action="{{route('news.store')}}" method="post">
     @csrf
    <div class="form-group">
        <input type="int" class="form-control" id="" name="id" placeholder="">
      </div>
      <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" id=""name="title" placeholder="">
       
      </div>
      <div class="form-group">
        <label for="">Content</label>
        <input type="text" class="form-control" id="" name="content" placeholder="">
      </div>
     
     
      <div class="form-group">
        
        <label>Hình Ảnh</label>
        <input type="file" class="form-control" id="" name="image" placeholder="">
      </div>
      <div class="form-group">
        
        
      
      <div class="form-group">
        
        <p class="help-block">Example block-level help text here.</p>
      </div>
    
      <button type="submit" name="" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="{{route('news.index')}}">Quay lại<span></span></a>
     
</form>
@stop