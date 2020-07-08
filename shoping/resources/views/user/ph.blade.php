<h3>purchase history</h3>
<div class="col-md-11">
	
	<a href="{{url('abc')}}" class="btn btn-outline-success" title="Turn Back">Turn Back</a>
	
	<div class="row">
		<div class="col-md-6">
			<table class="table table table-bordered table-hover table-striped">
	<thead class="btn-primary">
		
			 <th>No</th>
            <th>Order_number</th>
            <th>Transactiondate</th>
            <th>Customer</th>
            <th>Status</th>
           
            
		
	</thead>
	<tbody>
		@foreach( $order as$key=>$dh)
		<tr>
			<td>{{$key++}}</td>
			<td>{{$dh->order_number}}</td>
            <td>{{date('d-m-Y',strtotime($dh->transaction_date))}}</td>
            <td>{{$dh->customer->first_name}}</td>
            <td>{{$dh->status}}</td>
          
		</tr>
		@endforeach
		
	</tbody>
</table></div>
		<div class="col-md-6">
			<table class="table table table-bordered table-hover table-striped">
	<thead class="btn-primary">
		<th>price</th>
		<th>quantity</th>
		<th>total_price</th>
	</thead>
	<tbody>
		@foreach($orderdetail as $od)
		<tr>
			<td>{{$od->price}}</td>
			<td>{{$od->quantity}}</td>
			<td>{{$od->sub_total}}</td>
		</tr>
		@endforeach
	</tbody>
</table></div>
</div>
	
@include('layouts.link')