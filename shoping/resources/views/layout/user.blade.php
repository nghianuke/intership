@extends('layout.index')
@section('content')
<div class="row">
			
		
			<div class="col-md-4">
				<a href="{{url('product/create')}}" class="btn btn-info">Create</a>
			</div>
			<form class="form-inline my-2 my-lg-0" method="get" role="search" action="{{route('search')}}">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="key">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
			
			
			<table class="table table-hover table-bordered text-center table-striped">
				
				
				
					<thead class="btn-primary">
					<tr>
						
						<th>Numeric</th>
						<th>Product Code</th>
						<th>Product Name</th>
						<th>Description</th>
						<th>Brand</th>
						<th>Category</th>
						<th>Price</th>
						<th>Image</th>
						<th colspan = "3">Action</th>
					</tr>

					</thead>
				<tbody>
					
                 
					@foreach($product as $key => $p)

					<tr>
						<td>{{ ++$key }}</td>
						<td>{{ $p->product_code }}</td>
						<td>{{ $p->product_name }}</td>
						<td>{{Str::limit($p->description,3,'...') }}</td>
						<td>{{$p->brand_id}}</td>
						<td>{{$p->category_id}}</td>
						<td>{{ $p->price }}</td>
						<td><img src="images/{{$p->image}}" height="80px" width="70px;" class="card-img-top" alt="..."></td>
						<td>
							<div style="float: left;margin-left: 18%;">
							<button class="btn btn-success"><a class="text-white" href="{{ route('product.show',$p->id) }}">Chi tiết</a></button>
							
							</div>
							
							
						</td>
					</tr>
					@endforeach
					
				</tbody>
				</table>
				
			
				
				
				
			</div>
		
@endsection>