@extends('Content.Admin.Layouts.main')
@section('title','Tin tức')
@section('content')	
<div class="row">
	<div style="margin: 0 auto" class="col-md">	
		<div class="form-group">
			<a class="btn text-white" style="background: #fbb034" href="{{ route('new.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Bài viết</a>
			<br>
			<br>
		</div>
		<div class="form-group">
			<table id="dataTable" class="table table-hover table-bordered text-center">
				<thead style="background: #fbb034" class="btn-success">
					<tr>
						<th width="5%">Stt</th>
						<th width="30%">Tiêu đề</th>
						<th>Hình ảnh</th>
						<th width="30%">Nội dung</th>
						<th>Hành động</th>
					</tr>

				</thead>
				<tbody>
					@foreach($news as $key => $news)
					<tr>
						<td>{{ ++$key }}</td>
						<td>{{ $news->title }}</td>
						<td><img height="50" src="{{asset('images/product/thumbnails').'/'.$news->thumbnail}}"></td>
						<td>{{ $news->content }}</td>
						<td>
							<div style="float: left;margin-left: 34%;">

								<button style="background: #fbb034" class="btn text-white"><a class="text-white" href="{{ route('new.edit',$news->id) }}">Sửa</a></button>
							</div>
							<div style="float: left; margin-left: 5px;">
								{!! Form::open(['route' => ['new.destroy',$news->id], 'method' => 'DELETE']) !!}
								{!! Form::submit('Xóa',['class' => 'btn text-white','style="background: #fbb034"','onclick'=>"return confirm('Are you sure you want to delete this item?')"]) !!}

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
