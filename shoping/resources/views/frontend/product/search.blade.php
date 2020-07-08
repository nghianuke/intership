@extends('layout.index')
@section('content')
<div class="col-md-11">
	<div class="col-md-4 mt-1">
		<h4><strong>Tìm thấy <span class="text-danger">{{count($product)}}</span> sản phẩm</strong></h4>
	</div>
	<div class="col-md-8 ">
		 <form class="form-inline" method="get" role="search" action="{{route('search')}}">
      <input class="form-control " type="search" placeholder="Search" aria-label="Search" name="key" style="margin :4px 0px 2px 10px;">
      <button class="btn btn-secondary" type="submit">Search</button>
    </form>
	</div>
    
	<table class="table table-hover table-bordered text-center table-striped row">
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
			@foreach($product as $key => $products)
			<tr>
				<td>{{++$key}}</td>
      		<td>{{$products->product_code}}</td>
          <td>{{$products->product_name}}</td>
          <td>{{$products->description}}</td>
            <td>{{$products->brand->name}}</td>
            <td>{{$products->category->name}}</td>
      		<td>{{$products->price}}</td>
				
				
			</tr>
			@endforeach

		</tbody>
	</table>
</div>


@endsection