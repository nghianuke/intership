@extends('Content.Admin.Layouts.main')
@section('title','Trang sản phẩm')

@section('content')

<div class="form-group">
  <a class="btn text-white" style="background: #fbb034" href="{{ route('product.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Sản Phẩm</a>
  <br>
  <br>
</div>
<table id="dataTable" class="table table-bordered table-hover">
  <thead style="background: #fbb034">
    <tr>
     <th>Stt</th>
     <th>Tên</th>
     <th>Mô tả</th>
     <th>Ảnh</th>
     <th>Người dịch</th>
     <th>Loại bìa</th>  
     <th>Nhà xuất bản</th>

     <th>Hành động</th>
   </tr>
 </thead> 
 <tbody>
   @foreach($product as $key=>$products)
   <tr>
    <td>{{++$key}}</td>
    <td>{{$products->name}}</td>
    <td>{{$products->description}}</td>
    <td><img height="50" src="{{asset('images/product/thumbnails').'/'.$products->thumbnail}}"></td>
    <td>{{$products->translator}}</td>
    <td>{{$products->cover_type}}</td>
    <td>{{$products->publishing}}</td>
    <td> 
     <a href="{{route('product.show',$products->id)}}" class="btn text-white float-left" style="background: #fbb034">Xem</a>
     <a href="{{route('product.edit',$products->id)}}" class="btn text-white float-left ml-1 mr-1" style="background: #fbb034">Sửa</a>
     <div class="float-left">
          {!! Form::open(['route' => ['product.destroy',$products->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Xóa',['class' => 'btn text-white','style="background: #fbb034"', 'onclick'=>"return confirm('Are you sure you want to delete this item?')"]) !!}

                {!! Form::close() !!}
    </div>
  <!--  Endsection delete modal -->

</td>
</tr>
@endforeach
</tbody>
</table>

</div>
@endsection