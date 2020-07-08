@extends('Content.Admin.Layouts.main')

@section('title','Trang Xem Phản hồi')

@section('content')
		<div class="row">
			<div style="margin: 0 auto" class="col-md">
			<div class="form-group">
			<table id="dataTable" class="table table-hover table-bordered text-center">
				<thead style="background: #fbb034" class="btn-success">
					<tr>
						<th>Stt</th>
						<th>Tên</th>
						<th>Email</th>
						<th>Nội dung</th>
						<th>Hành động</th>
					</tr>

				</thead>
				<tbody>
					@foreach($feedback as $key => $feedback)
					<tr>
						<td>{{ ++$key }}</td>
						<td>{{ $feedback->name }}</td>
						<td>{{ $feedback->email }}</td>
						<td>{{ $feedback->content }}</td>
						<td>
							<div>
								{!! Form::open(['route' => ['feedback.destroy',$feedback->id], 'method' => 'DELETE']) !!}
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
