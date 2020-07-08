@include('layouts.link')
<div class="col-md-11">
	<h3 class="text-center" style="text-transform: uppercase;">Show Product</h3>
	<div class="text-body ">
		<div class="row">
			<div class="col-md-6">
			
				<img src="/shoping/public/images/{{$product->image}}" width="450px" height="200px" alt="...">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><strong>Product_Code:</strong></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><strong>Description:</strong></a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">{{$product->product_code}}</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">{{$product->description}}</div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>
			
			</div>
			<div class="col-md-6">
				<div class="card" style="width: 28rem; height: 240px;">
  
  <div class="card-body">
    <h5 class="card-title"><strong>Product_Name:</strong> {{$product->product_name}} </br></h5>
    <p class="card-text">	<strong>Price:</strong> {{$product->price}}  </br></p>
    	<a href="{{url('abc')}}" class="btn btn-info">Back To Page Home</a>
  </div>
</div>
			
			</div>
		</div>
		
	
	</div>
