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

<a class="btn btn-primary" href="{{route('product.create')}}">ADD PRODUCT</a>

<table  id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
       
            <td>
               ID
            </td>
            <td >
                Image 
            </td>
            <td>
                Name
            </td>
            <td>
                NameType
            </td>

            <td>
               
                Description
            </td>
            <td>
            updated_at 
            </td>
                      
            <td>
           Price
            </td>
            <td>
              Actions
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        
        <tr>
        
            <td>
               {{$item->id}}
            </td>
            <td>
            <img src="{{url('public/Home/imges')}}/{{$item->image}}" style="max-width:100px" alt=""></td>
            </td>
            <td>
            {{$item->name}}
            </td>
            <td>
            {{$item->type->nametype}}
            </td>

            <td style="color: red;">
            {!! $item->description !!}
            </td>
           <td>
            {{$item->updated_at}}
            </td>
            <td style="color: red;">
            {{number_format($item->unit_price)}}đ
            </td>
            <td>
            <a href="{{route('product.edit',$item->id)}}" class="btn btn-success">
            <i class="fa fa-edit"></i>
            </a>
            <a href="{{route('product.destroy',$item->id)}}" class="btn btn-danger btndelete">
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
            {{$data->appends(request()->all())->links()}}
            
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