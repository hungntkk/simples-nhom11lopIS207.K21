@extends('welcome')
@section('content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Trang chủ<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Giỏ hàng</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<?php
					$content = Cart::content();
					?>
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>Sản phẩm</th>
								<th>Tên</th>
								<th class="text-center">Giá</th>
								<th class="text-center">Số lượng</th>
								<th class="text-center">Thành tiền</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							@foreach($content as $v_content)
							<tr>
								<td><img src="{{URL::to('/uploads/product/'.$v_content->options->image)}}" width= "75" alt="#"></td>
								<td class="product-des" data-title="Description">
									<p class="product-name"><a href="#">{{$v_content->name}}</a></p>
									{{-- <p class="product-des">Maboriosam in a tonto nesciung eget  distingy magndapibus.</p> --}}
								</td>
								<td class="price" data-title="Price"><span>{{number_format($v_content->price).' '. 'VNĐ'}} </span></td>
								<td class="qty" data-title="Qty"><!-- Input Order -->
									<div class="cart_quantity_button">
										<form action="{{URL::to('/update-cart-quantity')}}" method="POST">
											{{csrf_field()}}
											{{-- <div class="button minus">
											<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
												<i class="ti-minus"></i>
											</button>
											</div> --}}
											<input type="text" name="cart_quantity" class="cart_quantity_input" value="{{$v_content->qty}}" autocomplete="off" size="2">
											<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
											<input type="submit" value="Cập nhật" name="update_qty" style="padding: 5px 10px"  class="btn btn-default btn-sm">
											{{-- <input type="submit" value="Cập nhật" name="update_qty" class="btn btn-default btn-sm"> --}}
											{{-- <div class="button plus">
											<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
												<i class="ti-plus"></i>
											</button>
											</div> --}}
										</form>
									</div>
									<!--/ End Input Order -->
								</td>
								<td class="total-amount"><span>
									
									<?php
									$subtotal = $v_content->price * $v_content->qty;
									echo number_format($subtotal).' '.'VNĐ';
									?>
								</span></td>
								<td class="action" data-title="Remove"><a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}"><i class="ti-trash remove-icon"></i></a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
										<form action="#" target="_blank">
											<input name="Coupon" placeholder="Enter Your Coupon">
											<button class="btn">Apply</button>
										</form>
									</div>
									<div class="checkbox">
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li>Tổng<span>{{Cart::subtotal().' '. 'VNĐ'}}</span></li>
										<li>Phí Ship<span>{{Cart::tax().' '. 'VNĐ'}}</span> </li>
										<li>Thành tiền<span>{{Cart::total().' '. 'VNĐ'}}</span></li>
										<li class="last">Cần thanh toán<span>{{Cart::total().' '. 'VNĐ'}}</span></li>
									</ul>
									<div class="button5">
										<a href="{{URL::to('/login-checkout')}}" class="btn">Thanh toán</a>
										<a href="/shop" class="btn">Quay lại Shop</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			
@endsection