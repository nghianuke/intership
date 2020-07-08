
<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
  <title>Shop Game</title>
  <link rel="stylesheet" type="text/css" href="css/fe/index.css">
</head>
<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Brand</a>
  <a class="navbar-brand" href="#"><img src="images/apple.png" style="width: 30px;"></a>
  

  
    <ul class="nav justify-content-end">
       <li class="nav-item">
    <a class="nav-link active" href="{{url('admincp/login')}}" style="margin-left: 600px;">Login</a>
    
  </li>
    <li class="nav-item">
    <a class="nav-link active" href="{{url('register')}}">Regristration</a>
    
  </li>

     
    
       
   
     
    </ul>
   

</nav>
<!-- ket thuc top -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/god.jpg" class="d-block w-100 " alt="..." style="height: 500px;"> 
    </div>
    <div class="carousel-item">
      <img src="images/god1.jpg" class="d-block w-100" alt="..." style="height: 500px;">
    </div>
    <div class="carousel-item">
      <img src="images/god3.jpeg" class="d-block w-100" alt="..." style="height: 500px;">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- ket thuc slide -->

  <div class="row">
  	<div class="col-md-10">
  		
  		<h4 class=""><strong>Tìm thấy <span class="text-danger">{{count($product)}}</span> sản phẩm</strong>
  	 * @foreach($product as $p)
    {{$p->product_name}}
    @endforeach *
  </h4>
  	</div>
  	<div class="col-md-2">
  		   <a href="{{url('abc')}}"> <i class="fas fa-cart-plus mt-2">
        View Cart
       </i></a>
  	</div>
  	</div>
  	
     	 
   
   
  
  </div>

  

<!-- vertical-menu menu-doc -->
<!-- horizontal-menu menu-ngang -->
<div class="container">
  <div class="row">
  <div class="col-md-3">
       <div class="vertical-menu">
        <a href="" class="active">Category</a>
         @foreach($category as $cat)
          <a href="" >{{$cat->name}}</a>
         
               
              @endforeach   
       </div>
       <div class="list-group">
        <a href="#" class="active">Brand</a>
        @foreach($brand as $b)
        <a href="#" class="list-group item ">
          <div class=""><h5>
            {{$b->name}}</h5>
      </div>
        <p class="mb-1">
          {{$b->description}}
         
         

        </p>
        @endforeach
        <small>Done God Game</small>
        </a>
       </div>

   </div>
  <div class="col-md-9 col-xs-12 col-sm-12 col-lg-9">
    <div class="row"> 
      @foreach($product as $key => $product)
     <div class="col-md-3 ">
        <div class="card">
       <a href="{{ route('product.show',$product->id)}}" class="inner">
          <img src="images/{{$product->image}}">
           
       </a>
       <h4 class="text-center">{{$product->product_name}}</h4>
        <div class="fom-group form-inline mt-2 mb-2">
          <a href="{{ route('product.show',$product->id)}}" class="btn btn-primary" style="width: 70px; margin-right:-10px;">Detail</a>
        <a href="{{ route('checkoutconfirm',$product->id) }}" class="btn btn-outline-primary" style="width: 70px; margin-right: 20px;">Buy</a>
        </div>
       
       
      </div>
      </div>
      @endforeach
     
     
    
  </div>
</div>
</div>

  </div>
  <div class="container text-center footer">
   <div class="row">
    <div class="col-md-3">
      <ul class="nav-pill">
        <li><a href="">About Us</a></li>
        <li><a href="">Blog </a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="nav-pill">
        <li><a href="">Product For Mac</a></li>
        <li><a href="">Product for Windows</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="nav-pill">
        <li><a href="">Web Analysics</a></li>
        <li><a href="">Presentations</a></li>
      </ul>
    </div>
    <div class="col-md-3">
      <ul class="nav-pill">
        <li><a href="">Product Help</a></li>
        <li><a href="">Develop API</a></li>
      </ul>
    </div>
   </div>
   <div class="row ">
     <div class="col-sm-12 text-center">
      <span>@2019 Company Nghia</span>
     </div>
  
   </div>
  


</body>
</html>
<style type="text/css">
  .inner{
  overflow: hidden;
  position: relative;
}
.inner img{
  width:100%;
  height: 250px;
  transition: all 1.5s ease;
}
.inner:hover img {
  transform: scale(1.5);

}
.text{
  position: absolute;
  left: 0px;
  top: 100%;
  text-align: center;
  transition: all 0.5s;


  /*width: 250px;
  height: 100px;
  background-color: skyblue;*/
  display: none;
  
  
}
.card:hover .text{
  display: block;
    top: 90px;
    left: 60px;

}


</style>