@extends('layout.index')
@section('content')
<div class="col-md-4" style="margin-top: 2px;">
      @if(Session::has('destroy'))
      <div class="alert alert-danger text-center">
            {{Session::get('destroy')}}
      </div>
      @endif
</div>
<div class="col-md-11">
      <div class="a-header col-md-2" style="margin:3px 0px 3px 0px;">
            <a href="{{url('brand/create')}}" class="btn btn-success" title="Create New Brand"> <i class="fas fa-plus" style="margin-right: 4px;"></i></a>
      </div>
      <div class="col-md-10">
        <marquee direction="right">Manger Brand </marquee>
      </div>
	<table class="table table-bordered table-hover">
		<thead class="btn-primary">
			<th>No</th>
			<th>Name</th>
			<th>Description</th>
			<th>Action</th>
		</thead>	
      <tbody>
      	@foreach($brand as $key=>$brands)
      	<tr>
      		<td>{{++$key}}</td>
      		<td>{{$brands->name}}</td>
      		<td>{{$brands->description}}</td>
      		<td>
      			<a href="{{route('brand.show',$brands->id)}}" class="btn btn-primary">Show</a>
      			<a href="{{route('brand.edit',$brands->id)}}" class="btn btn-success">Edit</a>
      			
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
            {{Form::open(['route'=>['brand.destroy',$brands->id],'method'=>'delete'])}}
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
    {{$brand->links()}}
  </div>
</div>
@endsection