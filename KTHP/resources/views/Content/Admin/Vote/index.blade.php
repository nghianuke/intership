@extends('Content.admin.Layouts.main')
@section('content')
<div class="container">
	<div class="row">
		
	<table class="table table-hover table-bordered text-center"  style="text-overflow: ellipsis;" >
		<thead style="background: #fbb034" class="btn-success">
		<th>STT</th>
		<th>Số sao đánh giá</th>
		<th>Tiêu đề</th>
		<th style="word-wrap: break-word;">Bình luận</th>
		
		<th>Hành động</th>
		</thead>
	<tbody>
		@foreach($vote as $key=>$vote)
		<tr>
			<td>{{++$key}}</td>
			<td>{{$vote->star}}</td>
			<td>{{$vote->title}}</td>
			<td width="500p">{{Str::limit($vote->comment,50,'....')}}</td>
			<td width="200">
					
				<button class="btn btn-info"><a class="text-white" href="{{ route('vote.show',$vote->id) }}">Chi Tiết</a></button>
				<!-- <button class="btn btn-primary"><a class="text-white" href="{{ route('vote.edit',$vote->id) }}">Sửa</a></button> -->
				<div style="float: left; margin-left: 5px;">
				{!! Form::open(['route' => ['vote.destroy',$vote->id], 'method' => 'DELETE']) !!}
				{!! Form::submit('Xóa',['class' => 'btn btn-danger']) !!}

				{!! Form::close() !!}
				</div>
		
			</td>
		</tr>
		@endforeach
	
</tbody>
</table>
</div>
</div>

@endsection