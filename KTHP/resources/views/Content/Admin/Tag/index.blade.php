@extends('Content.Admin.Layouts.main')
@section('title','Trang Tag')
@section('content')

<div class="form-group">
  <a class="btn text-white" style="background: #fbb034" href="{{ route('tag.create') }}"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm Tag</a>
  <br>
  <br>
</div>

<table id="dataTable" class="table table-bordered table-hover">

  <thead class="btn-primary" style="background: #fbb034">
    <tr>
     <th>Stt</th>
     <th>Tên Tag</th>
     <th>Slug</th>        
     <th>Hành động</th>
   </tr>
 </thead> 
 <tbody>
   @foreach($tag as $key=>$tags)
   <tr>
    <td>{{++$key}}</td>
    <td>{{$tags->tag_name}}</td>
    <td>{{$tags->slug}}</td>  
    <td width="200px"> 
     <a href="{{route('tag.edit',$tags->id)}}" class="btn text-white float-left ml-1 mr-1" style="background: #fbb034">Sửa</a>
     <div class="float-left">
          {!! Form::open(['route' => ['tag.destroy',$tags->id], 'method' => 'DELETE']) !!}
                {!! Form::submit('Xóa',['class' => 'btn text-white','style="background: #fbb034"', 'onclick'=>"return confirm('Are you sure you want to delete this item?')"]) !!}

                {!! Form::close() !!}
    </div>
  <!--  Endsection delete modal -->

</td>
</tr>
@endforeach
</tbody>
</table>


@endsection