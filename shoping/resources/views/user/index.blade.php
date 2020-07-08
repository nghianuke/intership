<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
   @include('layouts.link')
  <title>Shop Game</title>
  <link rel="stylesheet" type="text/css" href="css/fe/index.css">
</head>
<body>
  <div class="container">
    @include('layouts.header')
<!-- ket thuc top -->
@include('layouts.slide')
<!-- ket thuc slide -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand active btn btn-primary mr-2" href="#">Page Home</a>
    <a class="navbar-brand" href="#" >About Us</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    
    <form class="form-inline nav navbar-" action="{{route('search')}}">
      <input class="form-control mr-sm-2" type="search" placeholder="Search Brand" aria-label="Search" name="key_word">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="nav navbart" style="margin-left: 450px;">
     
      
     
      <li class="nav-item">
      
      <a href=""> <i class="fas fa-cart-plus mt-2">
        View Cart
       </i></a>
      </li>
    </ul>
  </div>
</nav>
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
  @include('layouts.footer')
  


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