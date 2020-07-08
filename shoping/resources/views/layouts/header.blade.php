<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Shoping</a>
  <a class="navbar-brand" href="#"><img src="{{asset('images/apple.png')}}" style="width: 30px;"></a>
  

  
    <ul class="nav justify-content-end">
       <li class="nav-item">
    <a class="nav-link btn btn-outline-primary" href="{{url('admin/login')}}" style="margin-left: 450px;">Login</a>
    
  </li>
    <li class="nav-item">
    <a class="nav-link active" href="{{url('register')}}">Regristration</a>
    
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{url('ph')}}">Purchase History</a>
    
  </li>

     
    
       
   
     
    </ul>
   
<div class="dot" id="dot_01" onclick="dot_01(this)"><div class="star star-5 far fa-star mr-1" id="dot_01" onclick="alert('Cảm ơn bạn đã đánh giá sản phẩm')" name="star" title="rate"> </div></div>
<div class="dot" id="dot_01" onclick="dot_01(this)"><div class="star star-5 far fa-star mr-1" id="dot_01" onclick="alert('Cảm ơn bạn đã đánh giá sản phẩm')" name="star" title="rate"> </div></div>
<div class="dot" id="dot_01" onclick="dot_01(this)"><div class="star star-5 far fa-star mr-1" id="dot_01" onclick="alert('Cảm ơn bạn đã đánh giá sản phẩm')" name="star" title="rate"> </div></div>
<div class="dot" id="dot_01" onclick="dot_01(this)"><div class="star star-5 far fa-star mr-1" id="dot_01" onclick="alert('Cảm ơn bạn đã đánh giá sản phẩm')" name="star"title="rate" > </div></div>
<div class="dot" id="dot_01" onclick="dot_01(this)"><div class="star star-5 far fa-star" id="dot_01" onclick="alert('Cảm ơn bạn đã đánh giá sản phẩm')" name="star" title="rate"> </div></div>
</nav>
<script type="text/javascript">
 document.getElementById("dot_01").style.backgroundColor = 'white';
function dot_01(el) {
  if (el.style.backgroundColor === 'white') {
    el.style.backgroundColor = 'gray';   
  }
  else el.style.backgroundColor = 'white';
}
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>