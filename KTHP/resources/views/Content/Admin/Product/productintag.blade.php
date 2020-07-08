<!DOCTYPE html>
<html>
<head>
<title>Danh sách</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta charset="utf-8">
</head>
<body>
<div class="container"><br>
	<nav class="navbar navbar-light bg-light">
	  <a class="navbar-brand" href="#">
	   product List
	  </a>
	</nav>
	<div class="row">

		<div style="margin: 0 auto" class="col-md-12">
			<br>
			<a class="btn btn-success" href="{{ route('product.create') }}">Tạo mới</a><br>
			<h1 class="text-center">News</h1>
		@if (session('success'))
		<div class="alert alert-success">
		      <p>{{ session('success') }}</p>
		</div>
		@else
		<div class="alert alert-error">
		      <p>{{ session('error') }}</p>
		</div>
		@endif
		@foreach($product as $key => $post)
				<h3 class="text-success">{{$post->name}}</h3>
				<p class="text-info">{{Str::limit($post->description,250,'...')}}</p>
				<button class="btn btn-info"><a class="text-white" href="{{ route('product.show',$post->id) }}">Read more ...</a></button>
				<hr>
		@endforeach

			
				
		</div>
	</div>
</div>
<hr/>
</body>
</html>
