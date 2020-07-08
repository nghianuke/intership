@include('layouts.header')
@include('layouts.link')
  
    <div class="row">
        <div class="col-md-8 mx-auto">
           @if(Session::has('success'))
     <div class="alert alert-success">
       {{Session::get('success')}}
     </div>
     @endif
          <ul class="list-group">
          <li class="list-group-item active">Product infomation</li>
          <li class="list-group-item">{{$product->product_name}}</li>
          <li class="list-group-item">{{$product->product_code}}</li>
          <li class="list-group-item">{{$product->price}}</li>
          <li class="list-group-item">{{$product->product_image}}</li>

        </ul>
        <hr/>
            {!! Form::open(['url' => 'checkout', 'method' => 'get']) !!}
            <input type="number" value="{{ $id }}" name="id" hidden="hidden"><br/>
            <label>Quantity</label>
            <input class="form-control" type="number" value="1" name="quantity">
                      
            <label>Customer</label>
            {{ Form::select('customer_id', $customer,'',['class' => 'form-control'] )}}
            {{Form::submit('checkout',['class'=>'btn btn-primary mt-2'])}}
           <a href="{{url('abc')}}" class="btn btn-info mt-2">Back </a>
          {!! Form::close() !!}
            
        </div>
        
    </div>
