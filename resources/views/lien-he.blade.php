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
								<li class="active"><a href=""><h6>Liên hệ</h6></a></li>
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
							<h4>Mọi đơn đặt hàng sỉ và lẻ xin vui lòng liên hệ:</h4>
							<p>Khu phố 6, phường Linh Trung, Quận Thủ Đức, TP HCM.</p> 
							<p>SĐT: 0912 345 678</p>
							<!-- Form -->
						</div>
					</div>
				</div>
				<div class="button5">
						<button class="btn" onclick="location.href='/';">Về trang chủ</button>
						<button class="btn" onclick="location.href='/shop';">Shopping ngay</button>
						{{-- <a href="/" class="btn">Về trang chủ</a>
						<a href="/shop" class="btn">Quay lại Shop</a> --}}
				</div>
			</div>
			
		</section>
		<!--/ End Checkout -->
			
@endsection