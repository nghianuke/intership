@extends('layout.index')
@section('content')
<div class="col-md-4" style="margin-top: 2px;">
      @if(Session::has('destroy'))
      <div class="alert alert-danger text-center">
            {{Session::get('destroy')}}
      </div>
      @endif
</div>


<!-- <h4><strong>Tìm thấy <span class="text-danger">{{count($product)}}</span> sản phẩm</strong></h4> -->
  
      <div class="col-md-11">
        <div class="row">
          <div class="col-md-2">
            <a href="{{url('product/create')}}" class="btn btn-success" title="Create New Product"> <i class="fas fa-plus" style="margin-right: 4px;"></i></a>
          </div>
          <div class="col-md-4">
               <marquee direction="right">Manger Product </marquee>
          </div>
          <div class="col-md-4">
          <!--   <form class="form-inline" method="get" role="search" action="{{url('timkiem)
          ')}}">
      <input class="form-control " type="search" placeholder="Search" aria-label="Search" name="keyy" style="margin :4px 0px 2px 10px;">
      <button class="btn btn-secondary" type="submit">Search</button>
    </form> -->
          </div>
        </div>
      </div>
	<table class="table table-bordered table-hover">
		<thead class="btn-primary">
			<th>No</th>
			<th>Product Code</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Price</th>
                <th>Image</th>
                <th >Action</th>
		</thead>	
      <tbody>
      	@foreach($product as $key=>$products)
      	<tr>
      		<td>{{++$key}}</td>
      		<td>{{$products->product_code}}</td>
          <td>{{$products->product_name}}</td>
          <td>{{str_limit($products->description, $limit = 20, $end = '...')}}
           </td>
            <td>{{$products->brand->name}}</td>
            <td>{{$products->category->name}}</td>
      		<td>{{$products->price}}</td>
          <td><img src="images/{{$products->image}}" width="100px" height="80px" alt="..."></td>
               
                
      		<td>
      			<a href="{{route('product.show',$products->id)}}" class="btn btn-primary">Show</a>
      			<a href="{{route('product.edit',$products->id)}}" class="btn btn-success">Edit</a>
      			
                       <!--   Start section delete modal -->
                       <!-- Button to Open the Modal -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Delete">
  Delete
</button>

<!-- The Modal -->
<div class="modal" id="Delete">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">  <strong>Warning</strong></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

         <h3>Did You Sure Delete Data Field This?</h3>
                        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
            {{Form::open(['route'=>['product.destroy',$products->id],'method'=>'delete'])}}
                        {{Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit'])}}
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        {{Form::close()}}
      </div>

    </div>
  </div>
</div>
                        <!--  Endsection delete modal -->

      		</td>
      	</tr>
      	@endforeach
      </tbody>
	</table>
<div class="col-md-11">
  {{$product->links()}}
</div>
</div>
@endsection