
@extends('layout.admin')
@section('main')
<form role="form" action="{{route('news.update',$news->id)}}" method="post">
     @csrf @method('PUT')
    <div class="form-group">
        <input type="text" value="{{$news->id}}" class="form-control" id="" name="id" placeholder="">
      </div>
      <div class="form-group">
        <label for="">title</label>
        <input type="text" value="{{$news->title}}" class="form-control" id=""name="name" placeholder="">
       
      </div>
      
      <div class="form-group" 
        <label for="">Content </label>
        <textarea type="text" value="{{$news->content}}" class="form-control" id="" name="content" ></textarea>
        <script type="text/javascript"> CKEDITOR.replace('content')</script> 
      </div>
     
      <div class="form-group">
        
        <label>Hình Ảnh</label>
        <input type="file" value="{{$news->image}}" class="form-control" id="" name="image" placeholder="">
      </div>
     
      <div class="form-group">
        
        <p class="help-block">Example block-level help text here.</p>
      </div>
    
      <button type="submit" name="" class="btn btn-primary">Submit</button>
      <a class="btn btn-primary" href="{{route('news.index')}}">Quay lại<span></span></a>
     
</form>
@stop