@extends('layout.index')
@section('content')
<h3 style="width: 100%; text-align: center;">Order Detail</h3>
        <div class="row">
            <div class="col-md-12">
                <b>Order Code: </b>
                <b style="color:red;"> {{ $order->order_number }} </b>
            </div>
            
            <div class="col-md-12">
                <b>Customer Name: </b>
                <b style="color:blue;">{{ $order->customer->first_name }} </b>
            </div>    
        </div>
        <br/><b>Order Product</b>
        {!! Form::open(['url' => 'order_detail', 'method' => 'post']) !!}
            {{Form::label('Product Name:')}}
            {{Form::hidden('order_id',$order->id)}}
            <select class="form-control" id="product_id" name="product_id" name="product_price">
                @foreach ($product as $product)
                <option value="{{ $product->id }}">
                    {{ $product->product_name }}
                </option>
                @endforeach
            {{Form::hidden('price',$product->price)}}
            </select><br/> 
            {{ Form::label('Quantity: ') }}
            {{ Form::number('quantity', '',['class' => 'form-control',]) }}<br/>
            {{Form::submit('Buy',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}   

        <br/><table style="text-align: center;" class="table table-bordered table-hover">
            <thead>
            <tr style="background: #9933ff; color: white;">
                <th>Product</th>                         
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Money</th>
            </tr>
            <tbody>
                @foreach($order->order_detail as $key => $order_detail)
                <tr>
                    <td>{{ $order_detail->product->product_name }}</td>
                    <td>{{ $order_detail->product->price }}</td>
                    <td>{{ $order_detail->quantity }}</td>
                    <td>{{ $order_detail->sub_total }}</td>
                </tr>
                <?php
                    {{  $order->total_amount += $order_detail->sub_total; }}  
                ?>
                @endforeach                
            </tbody>
        </table>
        <?php
            echo("<b>Total Amount: </b>");
            echo($order->total_amount);
        ?>    
@endsection

