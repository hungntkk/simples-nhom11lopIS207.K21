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
								<li class="active"><a href="/shop">Shop</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Breadcrumbs -->
		
		<!-- Product Style -->
		<section class="product-area shop-sidebar shop section">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4 col-12">
						<div class="shop-sidebar">
								<!-- Single Widget -->
								<div class="single-widget category">
									<h3 class="title">Danh mục</h3>
									<ul class="categor-list">
										@foreach($category as $key => $cate)
										<li><a href="{{URL::to('/danh-muc/'.$cate->id)}}"><strong>{{($cate->category_name)}}</strong></a></li>
										@endforeach
										
									</ul>
								</div>
								
						</div>
					</div>
					<div class="col-lg-9 col-md-8 col-12">
						<div class="row">
							<div class="col-12">
								<!-- Shop Top -->
								<div class="shop-top">
									<div class="shop-shorter">
										<div class="single-shorter">
											<label>Show :</label>
											<select>
												<option selected="selected">09</option>
												<option>15</option>
												<option>25</option>
												<option>30</option>
											</select>
										</div>
										<div class="single-shorter">
											<label>Sort By :</label>
											<select>
												<option selected="selected">Name</option>
												<option>Price</option>
												<option>Size</option>
											</select>
										</div>
									</div>
									<ul class="view-mode">
										<li class="active"><a href="/shop"><i class="fa fa-th-large"></i></a></li>
										<li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
									</ul>
								</div>
								<!--/ End Shop Top -->
							</div>
						</div>
						<div class="row">
							@foreach($category_by_id as $key => $product)
							<a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
							<div class="col-lg-4 col-md-6 col-12">
								<div class="single-product">
								<form action="{{URL::to('/them-cart-shop')}}" method="POST">
									{{csrf_field()}}
									<div class="product-img">
										<a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
											<img class="default-img" src="{{URL::to('uploads/product/'.$product->product_image)}}" alt="#">
										</a>
										<div class="button-head">
											<div class="product-action">
												<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Xem nhanh</span></a>
												<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Thêm vào yêu thích</span></a>
											</div>
											<input name="product_id_hidden" type="hidden" value="{{$product->product_id}}" />
																<input name="qty" type="hidden" value="1" />
											<div class="product-action-2">
												<button type="submit" class="btn btn-fefault cart">
																			<i class="fa fa-shopping-cart"></i>
																				Thêm vào giỏ hàng
																		</button>
											</div>
										</div>
									</div>
									<div class="product-content">
										<h3><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h3>
										<div class="product-price">
											<span>{{number_format($product->product_price).' '.'VNĐ'}}</span>
										</div>
									</div>
								</form>									
								</div>
							</div>
							</a>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Product Style 1  -->	

@endsection