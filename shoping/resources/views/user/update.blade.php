@extends('layout.index')
@section('content')

    <div class="row">
        @if(Session::has('message'))
       <div class="alert alert-success">
  <strong>Success!</strong> {{Session::get('message')}}
</div>
        @endif
    </div>
    
        <div class="col-md-11">
             <h3 class="text-center">Create Order</h3>
        {{Form::open(['url'=>'order','method'=>'post'])}}
        <div class="row">
        	<div class="col-md-6">
            <div class="rc-anchor-center-item rc-anchor-checkbox-holder"><span class="recaptcha-checkbox goog-inline-block recaptcha-checkbox-unchecked rc-anchor-checkbox recaptcha-checkbox-checked" role="checkbox" aria-checked="true" id="recaptcha-anchor" dir="ltr" aria-labelledby="recaptcha-anchor-label" aria-disabled="false" tabindex="0" style="overflow: visible;"><div class="recaptcha-checkbox-border" role="presentation" style="display: none;"></div><div class="recaptcha-checkbox-borderAnimation" role="presentation" style=""></div><div class="recaptcha-checkbox-spinner" role="presentation" style=""></div><div class="recaptcha-checkbox-spinnerAnimation" role="presentation" style=""></div><div class="recaptcha-checkbox-checkmark" role="presentation" style=""></div></span></div>
                 {{ Form::label('', 'order_number') }} 
            {{ Form::number('order_number', '',['class' => 'form-control','placeholder'=>'please enter description']) }}
            @error('order_number')
    <div class="text text-danger">{{ $message }}</div>
@enderror
            </div>
            <div class="col-md-6">
                {{ Form::label('', 'transaction') }} 
                    {{ Form::date('transaction',$transaction_date,['class' => 'form-control']) }}
            </div>
        </div>
           <div class="row">
               <div class="col-md-6">
                   {{ Form::label('theloai', 'Customer') }} 
            {{Form::select('customer_id',$customers,'',['class'=>'form-control'])}}
               </div>
                <div class="col-md-6">
                     {{ Form::label('', 'status') }} 
            {{ Form::text('status', '',['class' => 'form-control','placeholder'=>'please enter status']) }}
            @error('status')
    <div class="text text-danger">{{ $message }}</div>
@enderror
                </div>
           </div>
        
        <div class="form-group">
            {{ Form::label('', 'total_amount') }} 
            {{ Form::number('total_amount', '',['class' => 'form-control','placeholder'=>'please enter total']) }}
            @error('total_amount')
    <div class="text text-danger">{{ $message }}</div>
@enderror
        </div>
        	
		 <div class="form-group">
            {{ Form::submit('Save',['class' => 'btn btn-primary']) }}
            <a href="{{url('order')}}" class="btn btn-info">Back to List</a>
        </div>
        {{Form::close()}}
        	</div>
       
        
        
       
    
    </div>
    

@endsection