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
               Name
            </td>
            <td>
                Email
            </td>
            <td>
              Gender
            </td>

            <td>
               
               Address
            </td>
            <td>
               
            PassWord
            </td>
            <td>
            Phone
            </td>
                      
            <td>
         Note
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
            {{$item->name}}
            </td>
            <td>
            {{$item->email}}
            </td>
            <td>
            {{$item->gender}}
            </td>

            <td>
            {{$item->address}}
            </td>
            <td>
            {{$item->password}}
            </td>
           <td>
            {{$item->phone_number}}
            </td>
            <td style="color: red;">
            {{$item->note}}
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
        <hr>
              <div class="">
            {{$data->appends(request()->all())->links()}}
            
<!-- phan trang -->
        </div>

        </tbody>
       
        </div>






@stop()