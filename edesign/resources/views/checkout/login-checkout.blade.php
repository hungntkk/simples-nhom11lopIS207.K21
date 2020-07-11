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
								<li class="active"><a href=""><h6>Thanh toán</h6></a></li>
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
		<form class="form" method="POST" action="{{URL::to('/payment')}}">
			{{csrf_field()}}
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Thông tin đặt hàng</h2>
							<p>Hãy điền đầy đủ những thông tin có dấu (*) dưới đây để tiến hành Đặt hàng, cảm ơn bạn!</p>
							<!-- Form -->
			
							<form class="form" method="POST" action="">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Họ và tên<span>*</span></label>
											<input type="text" name="shipping_name" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Số điện thoại<span>*</span></label>
											<input type="text" name="shipping_phone" placeholder="" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Địa chỉ email<span></span></label>
											<input type="email" name="shipping_email" placeholder="" required="required">
										</div>
									</div>
									
								
									<div class="col-lg-12 col-md-12 col-12">
										<div class="form-group">
											<label>Địa chỉ cụ thể:<span>*</span></label>
											<input type="text" name="shipping_address" placeholder="" required="required">
											<input type="hidden" name="payment_fee" value="{{Cart::total()}}" required="required">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Ghi chú đơn hàng:<span>*</span></label>
											<textarea name="shipping_notes" placeholder="Ghi chú đơn hàng của bạn" rows="5" ></textarea>
											{{-- <input type="text" name="address" placeholder="" required="required"> --}}
										</div>
									</div>
									<div class="col-12">
										<div class="form-group create-account">
											<input id="cbox" type="checkbox">
											<label>Create an account?</label>
										</div>
									</div>
								</div>
							</form>
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<?php
								$content = Cart::content();
								?>
								@foreach($content as $v_content)
								@endforeach
								<h2>Thanh toán</h2>
								<div class="content">
									<ul>
										<li>Giỏ hàng<span>{{Cart::subtotal().' '. 'VNĐ'}}</span></li>
										<li>Phí Ship<span>{{Cart::tax().' '. 'VNĐ'}}</span></li>
										<li class="last">Tổng cộng<span>{{Cart::total()}}</span></li>
									</ul>
								</div>
							
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Hình thức thanh toán</h2>
								<div class="content">
									<div class="checkbox">
										<label class="checkbox-inline" for="1"><input name="payment_options" value="1" type="checkbox">Chuyển khoản</label>
										{{-- <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">Kiểm tra</label> --}}
										<label class="checkbox-inline" for="2"><input name="payment_options" value="2" type="checkbox"> Thanh toán khi nhận hàng</label>
									</div>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Payment Method Widget -->
							<div class="single-widget payement">
								<div class="content">
									<img src="images/payment-method.png" alt="#">
								</div>
							</div>
							<!--/ End Payment Method Widget -->
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button">
										<button type="submit" name="send_order" class="btn">thanh toán</button>
										{{-- <input href="" type="submit" name ="send_order" class="btn" value="Đặt hàng" > --}}
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->

						</div>
					</div>
				</div>
			</div>
		</form>
		</section>
		<!--/ End Checkout -->
		
		<!-- Start Shop Services Area  -->
		<section class="shop-services section home">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-rocket"></i>
							<h4>Free shiping</h4>
							<p>Orders over $100</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-reload"></i>
							<h4>Free Return</h4>
							<p>Within 30 days returns</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-lock"></i>
							<h4>Sucure Payment</h4>
							<p>100% secure payment</p>
						</div>
						<!-- End Single Service -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Start Single Service -->
						<div class="single-service">
							<i class="ti-tag"></i>
							<h4>Best Peice</h4>
							<p>Guaranteed price</p>
						</div>
						<!-- End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!-- End Shop Services -->
		
		<!-- Start Shop Newsletter  -->
		<section class="shop-newsletter section">
			<div class="container">
				<div class="inner-top">
					<div class="row">
						<div class="col-lg-8 offset-lg-2 col-12">
							<!-- Start Newsletter Inner -->
							<div class="inner">
								<h4>Newsletter</h4>
								<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="EMAIL" placeholder="Your email address" required="" type="email">
									<button class="btn">Subscribe</button>
								</form>
							</div>
							<!-- End Newsletter Inner -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Shop Newsletter -->
			
@endsection