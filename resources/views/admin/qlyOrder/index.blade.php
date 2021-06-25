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

 <h2 style="text-align:center;background: burlywood;color: aliceblue;">Order </h2> 

<table  id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <!-- <td>
               ID
            </td> -->
            <td>
            Orderer
            </td>
            <td>
            Gender
            </td>
           
            <td>
            Address
            </td>
            <td>
            Phone
            </td>
          <td>
               
               Status
            </td>
            <td>
            Total
            </td>
            <td>
              Actions
            </td>
          
        </tr>
    </thead>
    <tbody>
        @foreach ($bill as $item)
        
        <tr>
            <td>
               {{$item->cus->name}}
            </td>
            <td>
               {{$item->cus->gender}}
            </td>
            <td>
               {{$item->cus->address}}
            </td>
            <td>
               {{$item->cus->phone_number}}
            </td>
          
            <td style="color: blue;">
            {{$item->oder_status}}
            </td>
            <td style="color: red;">
            {{number_format($item->total)}} đ
            </td>
            <td>    
            <a href="{{URL::to('/view-Oder/'.$item->id)}}" class="btn btn-success">
            <i class="fa fa-eye"></i>
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
            {{$bill->appends(request()->all())->links()}}
            
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