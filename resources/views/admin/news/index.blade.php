@extends('layout.admin')
@section('main')
<form action=""  class="form-inline" >

    <div class="form-group">
        <input  class="form-control" name="key" id="key" placeholder="tìm kiếm..">
    </div>

    

    <button type="submit" class="btn btn-primary">
    <i class="fa fa-search"></i>
    </button>
</form>
<hr>

<a class="btn btn-primary" href="{{route('news.create')}}">ADD NEWS</a>

<table  id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
       
            <td>
               ID
            </td>
            <td>
               Image
            </td>
            <td >
            Title
            </td>
            <td>
              Content
            </td>
         

            <td>
               
            create_at
            </td>
            
          
            <td>
              Actions
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ($news as $item)
        
        <tr>
        
            <td>
               {{$item->id}}
            </td>
            <td>
            <img src="{{url('public/Home/imges')}}/{{$item->image}}" style="max-width:100px" alt=""></td>
            </td>
           <td>
            {{$item->title}}
            </td>
            <td>
            {!!$item->content!!}
            </td>

            <td>
            {{$item->create_at}}
            </td>
          
            
            <td>
            <a href="{{route('news.edit',$item->id)}}" class="btn btn-success">
            <i class="fa fa-edit"></i>
            </a>
            <a href="{{route('news.destroy',$item->id)}}" class="btn btn-danger btndelete">
            <i class="fa fa-trash"></i>
            </a>
            </td>
           
          
        
        </tr>
        
        @endforeach
        </tbody>
        </table>
        <form  method="POST" action="" id="form-delete">
       @csrf @method('DELETE')

       </form>
       <hr>
              <div class="">
            {{$news->appends(request()->all())->links()}}
            
<!-- phan trang -->
        </div>
       

@stop()

@section('js')
 <script>
 $('.btndelete').click(function(ev){
     ev.preventDefault();
     var _href= $(this).attr('href');
     $('form#form-delete').attr('action',_href);
     if(confirm('bạn có chắc muốn xoá không?')){
  $('form#form-delete').submit();
     }
  
 })
    
 </script>

@stop()