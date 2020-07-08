@extends('Content.Admin.Layouts.main')
@section('title','Danh mục')
@section('content')	
<div class="row">
	<div style="margin: 0 auto" class="col-md">
		<div class="form-group">
			<a class="btn text-white" style="background: #fbb034" href="{{ route('category.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Sản Phẩm</a>
			<br>
			<br>
			<table id="dataTable" class="table table-hover table-bordered text-center">
				<thead style="background: #fbb034" class="btn-success">
					<tr>
						<th>Stt</th>
						<th>Tên</th>
						<th>Mô tả</th>
						<th>Hành động</th>
					</tr>

				</thead>
				<tbody>
					@foreach($category as $key => $category)
					<tr>
						<td>{{ ++$key }}</td>
						<td>{{ $category->name }}</td>
						<td>{{ $category->description }}</td>
						<td>
							<div style="float: left;margin-left: 34%;">
								<button style="background: #fbb034" class="btn "><a class="text-white" href="{{ route('category.edit',$category->id) }}">Chỉnh sửa</a></button>
							</div>
							<div style="float: left; margin-left: 5px;">
								{!! Form::open(['route' => ['category.destroy',$category->id], 'method' => 'DELETE']) !!}
								{!! Form::submit('Xóa',['class' => 'btn text-white','style="background: #fbb034"', 'onclick'=>"return confirm('Are you sure you want to delete this item?')"]) !!}

								{!! Form::close() !!}
							</div>
							
							
						</td>
					</tr>
					@endforeach
					
				</tbody>
			</table>

		</div>
	</div>
</div>
@endsection