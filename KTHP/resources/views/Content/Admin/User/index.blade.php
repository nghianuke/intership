@extends('Content.Admin.Layouts.main')
@section('title','Khách hàng')
@section('content')
<div class="container">
	<table id="dataTable" class="table table-hover table-bordered text-center">
		<thead style="background: #fbb034">
			<tr>
				<th style="width: 5%;">STT</th>
				<th>Tên người dùng</th>
				<th>Email</th>
				<th>Vai trò</th>
				<th></th>
			</tr>
		</thead>
		<tbody>	
			@foreach($users as $key => $user)
			<tr>
				<td>{{ ++$key }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>@if($user->role==0)
					Quản trị viên
					@elseif(($user->role==1))
					Cộng tác viên 
					@else 
					Người dùng 
				@endif</p></td>
				<td><div>
					{!! Form::open(['route' => ['user.destroy',$user->id], 'method' => 'DELETE']) !!}
					{!! Form::submit('Xóa',['class' => 'btn btn-warning']) !!}

					{!! Form::close() !!}
				</div>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
@endsection