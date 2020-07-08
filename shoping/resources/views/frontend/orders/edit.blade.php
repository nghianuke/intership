@extends('layout.index')
@section('content')

    <div class="row">
        @if(Session::has('update'))
       <div class="alert alert-success">
  <strong>Success!</strong> {{Session::get('update')}}
</div>
        @endif
    </div>
    
        <div class="col-md-11">
             <h3 class="text-center">update Order</h3>
        {{Form::open(['route'=>['order.update',$order->id],'method'=>'put'])}}
        
                
           <div class="row">
              
                     {{ Form::label('', 'status') }} 
            {{ Form::text('status', '',['class' => 'form-control','placeholder'=>'please enter status']) }}
            
           </div>
        
        
		 <div class="form-group">
            {{ Form::submit('Save',['class' => 'btn btn-primary']) }}
            <a href="{{url('order')}}" class="btn btn-info">Back to List</a>
        </div>
        {{Form::close()}}
        	</div>
       
        
        
       
    
    </div>
    

@endsection