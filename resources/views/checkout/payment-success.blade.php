@extends('welcome')
@section('content')
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="/">Trang chủ<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href=""><h6>Hoàn tất Đặt hàng</h6></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
				
		<!-- Start Checkout -->
		{{-- <?php
		echo Session::get('shipping_id');
		?> --}}
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Đặt hàng thành công!</h2>
							<p>Cảm ơn bạn đã tin tưởng và ủng hộ Simples.gq!</p>
							<!-- Form -->
						</div>
					</div>
				</div>
				<div class="button5">
						<button class="btn" onclick="location.href='/';">Về trang chủ</button>
						<button class="btn" onclick="location.href='/shop';">Quay lại Shop</button>
						{{-- <a href="/" class="btn">Về trang chủ</a>
						<a href="/shop" class="btn">Quay lại Shop</a> --}}
				</div>
			</div>
			
		</section>
		<!--/ End Checkout -->
			
@endsection