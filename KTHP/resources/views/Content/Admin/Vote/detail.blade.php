@extends('Content.admin.Layouts.main')
@section('content')
<body>


	
	<section class="content-public">
		<section class="content-product-detail container-fluid">
	
			<div class="shopping-book">
				<h3>{{ $vote->title }}</h3>
				<div class="product_detail_bg_img">
					
				</div>
				<h3>Đánh Giá:</h3>
						<?php if ($vote->star == 1): ?>
							<i class="fas fa-star d"style="color: yellow"></i>
							<i class="fas fa-star d"></i>
							<i class="fas fa-star d"></i>
							<i class="fas fa-star d"></i>
							<i class="fas fa-star d"></i>
						<?php else: ?>
							<?php if ($vote->star == 2): ?>
							<i class="fas fa-star d"style="color: yellow"></i>
							<i class="fas fa-star d"style="color: yellow"></i>
							<i class="fas fa-star d"></i>
							<i class="fas fa-star d"></i>
							<i class="fas fa-star d"></i>
							<?php else: ?>
								<?php if ($vote->star == 3): ?>
									<i class="fas fa-star d" style="color: yellow"></i>
									<i class="fas fa-star d"style="color: yellow"></i>
									<i class="fas fa-star d"style="color: yellow"></i>
									<i class="fas fa-star d"></i>
									<i class="fas fa-star d"></i>
								<?php else: ?>
									<?php if ($vote->star == 4): ?>
									<i class="fas fa-star d"style="color: yellow"></i>
									<i class="fas fa-star d"style="color: yellow"></i>
									<i class="fas fa-star d"style="color: yellow"></i>
									<i class="fas fa-star d"style="color: yellow"></i>
									<i class="fas fa-star d"></i>
									<?php else: ?>
									<i class="fas fa-star d"style="color: yellow"></i>
									<i class="fas fa-star d"style="color: yellow"></i>
									<i class="fas fa-star d"style="color: yellow"></i>
									<i class="fas fa-star d"style="color: yellow"></i>
									<i class="fas fa-star d"style="color: yellow"></i>
									<?php endif ?>
								<?php endif ?>
							<?php endif ?>
						<?php endif ?>
						
						</div>
				<h3>Bình luận:</h3>
				 <p>{{ $vote->comment }}</p>
			</div>
		</section>

	</section>

	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0" nonce="NjXPLDcv"></script>
	
</body>
</html>
@endsection