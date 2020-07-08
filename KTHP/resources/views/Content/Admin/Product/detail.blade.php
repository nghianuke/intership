@extends('Content.Admin.Layouts.main')
@section('content')
	<div class="container">

		
		<div class="row">
			<h5 style="margin-top: 10px;margin-right: 10px">Tags: </h5>
			@foreach($product->tag as $key=> $tag)
			<li class="list-group-item">
				<a href="{{route('showpostIntag',$tag->id)}}">{{ $tag->tag_name }}</a>
			</li>
			@endforeach()
			<p></p>
		</div>
		<div class="row">
			<div style="margin: 0 auto" class="col-md">
				<table class="table table-bordered table-hover">
					<thead>
						<th>No</th>
						<th>Name</th>
						<th>Description</th>
						<th>Detail_image</th>
					</thead>
					<tbody>

						<tr>
							<td>{{$product->id}}</td>  		
							<td>{{$product->name}}</td>
							<td>{{$product->description}}</td>
							<td>@foreach($image as $img)
								<img height="150px" src="{{ asset('/images/product/'.$img->image_name) }}">

							@endforeach </td>
						</tr>

					</tbody>

				</table>

				
			</div>
		</div>

	</div>
@endsection


