<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Simples.gq - Shop áo thun đẹp cho mọi người</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{asset('css/reset.css')}}">
	<link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i>0981 234 567</li>
                                    <li><i class="ti-email"></i> support@simples.gq</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Đăng xuất') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="/"><img src="images/logo15.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">Danh mục</option>
									@foreach($category as $key => $cate)
										<option>{{($cate->category_name)}}</option>
									@endforeach
								</select>
								<form>
									<input name="search" placeholder="Tìm kiếm....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count"></span></a>
								<!-- Shopping Item -->
								<?php
								$content = Cart::content();
								?>
								
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span></span>
										<a href="#">Giỏ hàng</a>
									</div>
									@foreach($content as $v_content)
									<ul class="shopping-list">
										
										<li>
											<a href="{{URL::to('/delete-to-cart-index/'.$v_content->rowId)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="{{URL::to('/uploads/product/'.$v_content->options->image)}}" alt="#"></a>
											<h4><a href="#">{{$v_content->name}}</a></h4>
											<p class="quantity">{{$v_content->qty}}x - <span class="amount">{{number_format($v_content->price).' '. 'VNĐ'}} </span></p>
										</li>
									</ul>
									@endforeach
									<div class="bottom">
										<div class="total">
											<span>Tổng cộng</span>
											<span class="total-amount">{{Cart::subtotal().' '. 'VNĐ'}}</span>
										</div>
										<a href="/show-cart" class="btn animate">Xem giỏ hàng</a>
									</div>
								</div>
								
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>DANH MỤC</h3>
								<ul class="main-category">
									@foreach($category as $key => $cate)
										<li><a href="{{URL::to('/danh-muc/'.$cate->id)}}"><strong>{{($cate->category_name)}}</strong></a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
													<li class="active"><a href="/">Trang chủ</a></li>
													{{-- <li><a href="#">Product</a></li> --}}						
													<li><a href="/shop">Shop<i {{-- class="ti-angle-down" --}}></i><span class="new">New</span></a>
														{{-- <ul class="dropdown">
															<li><a href="/shopping">Sản phẩm</a></li>
															<li><a href="cart.html">Cart</a></li>
															<li><a href="checkout.html">Checkout</a></li>
														</ul> --}}
													</li>
													<li><a href="/design-shirt">Tự thiết kế áo thun</a></li>									
													<li><a href="/blog">Blog<i {{-- class="ti-angle-down" --}}></i></a>
													
													</li>
													<li><a href="/lien-he">Liên hệ</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
	
	<!-- Slider Area -->
	<section class="hero-slider" background-image="{{URL('https://cdn.wallpaper.com/main/2_21_0.jpg?UarImjhQ2zF0_tQFOcphuujOS188Q.Ar')}}">
		<!-- Single Slider -->
		<div class="single-slider" background-image="{{URL('https://cdn.wallpaper.com/main/2_21_0.jpg?UarImjhQ2zF0_tQFOcphuujOS188Q.Ar')}}">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<h1><span>Giảm tới 50% </span>Áo thun cho nam</h1>
										<p>Từ những thương hiệu nổi tiếng hàng đầu <br> uni qlo, adidas <br>h&m, nike.</p>
										<div class="button">
											<a href="/danh-muc/11" class="btn">Shop Nam!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->
	
	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/hinh-nen-2.png" alt="#">
						<div class="content">
							<p>Áo thun nam</p>
							<h3>Bộ sưu tập <br> Hè</h3>
							<a href="/danh-muc/11">Theo dõi ngay!</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/hinh-nen-3.png" alt="#">
						<div class="content">
							<p>Áo thun nữ</p>
							<h3>Bộ sưu tập <br> Hè 2020</h3>
							<a href="/danh-muc/12">Shop Nữ</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="images/hinh-nen-4.png" alt="#">
						<div class="content">
							<p>Sale nhanh</p>
							<h3>Tháng 7 <br> Lên tới <span>40%</span></h3>
							<a href="/shop">Theo dõi ngay!</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->
	
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Danh mục sản phẩm</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									@foreach($category as $key => $cate)
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#{{($cate->id)}}" role="tab">{{($cate->category_name)}}</a>
										</li>
									@endforeach
								</ul>
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								@foreach($category as $key => $cate)
								<div class="tab-pane fade show active" id="{{($cate->id)}}" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach($all_product as $key => $product)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a data-toggle="modal" data-target="#{{($product->product_id)}}">
															<img class="default-img" src="{{URL::to('uploads/product/'.$product->product_image)}}" alt="#" height="750" width="550">
														</a>
													<form action="{{URL::to('/them-cart')}}" method="POST">
															{{csrf_field()}}
														<div class="button-head">
															
															<div class="product-action">
																<a data-toggle="modal" data-target="#{{($product->product_id)}}" title="Xem nhanh" href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><i class=" ti-eye"></i><span>Xem nhanh</span></a>
																<input name="product_id_hidden" type="hidden" value="{{$product->product_id}}" />
																<input name="qty" type="hidden" value="1" />
															</div>
															<div class="product-action-2">
																<button type="submit" class="btn btn-fefault cart">
																			<i class="fa fa-shopping-cart"></i>
																				Thêm vào giỏ hàng
																		</button>
															</div>
														</div>
													</form>
													</div>
													<div class="product-content">
														<h3><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h3>
														<div class="product-price">
															<span>{{number_format($product->product_price).' '.'VNĐ'}}</span>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
								
								@endforeach
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/hinh-nen-5.png" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Man's items <br>Up to<span> 50%</span></h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="images/hinh-nen-3.png" alt="#">
						<div class="content">
							<p>shoes women</p>
							<h3>mid season <br> up to <span>70%</span></h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Sản phẩm hot!</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
									<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
								<div class="product-price">
									<span class="old">$60.00</span>
									<span>$50.00</span>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Đang giảm giá</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					@foreach($on_sale_product as $key => $sale_pro)
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="{{URL::to('uploads/product/'.$sale_pro->product_image)}}" alt="#">
									<a data-toggle="modal" data-target="#{{($sale_pro->product_id)}}" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h4 class="title"><a href="{{URL::to('/chi-tiet-san-pham/'.$sale_pro->product_id)}}">{{($sale_pro->product_name)}}</a></h4>
									<p class="price with-discount">{{($sale_pro->product_price)}}</p>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<!-- End Single List  -->
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Xem nhiều nhất</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					@foreach($seen_product as $key => $seen_pro)
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
									<img src="{{URL::to('uploads/product/'.$seen_pro->product_image)}}" alt="#">
									<a data-toggle="modal" data-target="#{{($seen_pro->product_id)}}" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h4 class="title"><a href="{{URL::to('/chi-tiet-san-pham/'.$seen_pro->product_id)}}">{{($seen_pro->product_name)}}</a></h4>
									<p class="price with-discount">{{($seen_pro->product_price)}}</p>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					<!-- End Single List  -->
					
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Siêu khuyến mãi (Thành viên)</h1>
							</div>
						</div>
					</div>
					@yield('content')
				</div>

			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->
	
	<!-- Start Cowndown Area -->
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="images/ao-nam-1.png" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Khuyễn mãi tháng 7</p>
								<h3 class="title">Áo thun phong cách, độc đáo</h3>
								<p class="text">Đầy đủ size cho cả nam và nữ</p>
								<h1 class="price">50K <s>80K</s></h1>
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->
	
	<!-- Start Shop Blog  -->
	<section class="shop-blog section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Bài viết</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($all_blog as $key => $blo)
				<div class="col-lg-4 col-md-6 col-12">
					<!-- Start Single Blog  -->
					
					<div class="shop-single-blog">
						<img src="{{URL::to('/uploads/blog/'.$blo->blog_image)}}" alt="#">
						<div class="content">
							<p class="date">22 July , 2020. Monday</p>
							<a href="{{URL::to('/show-blog/'.$blo->blog_id)}}" class="title">{{($blo->blog_name)}}</a>
							<a href="{{URL::to('/show-blog/'.$blo->blog_id)}}" class="more-btn">Đọc tiếp</a>
						</div>
					</div>
					
					<!-- End Single Blog  -->
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!-- End Shop Blog  -->
	
	 <!-- Start Shop Services Area  -->
        <section class="shop-services section home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-rocket"></i>
                            <h4>Miễn phí giao hàng nội thành TP HCM</h4>
                            <p>Cho hóa đơn trên 200K</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-reload"></i>
                            <h4>Đổi trả miễn phí</h4>
                            <p>30 ngày sau khi mua hàng</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-lock"></i>
                            <h4>Thanh toán an toàn</h4>
                            <p>100% bảo mật</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <i class="ti-tag"></i>
                            <h4>Giá cả hợp lý</h4>
                            <p>Giá tốt nhất thị trường</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shop Services <--></-->
	<!-- Modal -->
	@foreach($all_pro as $key => $product)
    <div class="modal fade" id="{{($product->product_id)}}" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row no-gutters">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!-- Product Slider -->
									<div class="product-gallery">
										<div class="quickview-slider-active">
											<div class="single-slider">
												<img src="{{URL::to('/uploads/product/'.$product->product_image)}}" height="840" width="530" alt="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
											</div>
										</div>
									</div>
								<!-- End Product slider -->
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="quickview-content">
                                    <h2>{{($product->product_name)}}</h2>
                                    <div class="quickview-ratting-review">
                                        <div class="quickview-ratting-wrap">
                                            <div class="quickview-ratting">
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="yellow fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <a href="#"> (15 lượt đánh giá)</a>
                                        </div>
                                        <div class="quickview-stock">
                                            <span><i class="fa fa-check-circle-o"></i>Hàng mới</span>
                                        </div>
                                    </div>
                                    <h3>{{number_format($product->product_price).' '.'VNĐ'}}</h3>
                                    <div class="quickview-peragraph">
                                        <p>{{($product->product_desc)}}</p>
                                        <p>{{($product->product_content)}}</p>
                                    </div>
									<div class="size">
										<div class="row">
											<div class="col-lg-6 col-12">
												<h5 class="title">Size</h5>
												<select>
													<option selected="selected">s</option>
													<option>m</option>
													<option>l</option>
													<option>xl</option>
												</select>
											</div>
											<div class="col-lg-6 col-12">
												<h5 class="title">Màu sắc</h5>
												<select>
													<option selected="selected">Cam</option>
													<option>Vàng</option>
													<option>Đen</option>
													<option>Đỏ</option>
												</select>
											</div>
										</div>
									</div>
								<form action="{{URL::to('/them-cart-1')}}" method="POST">
									{{csrf_field()}}
                                    <div class="quantity">
										<!-- Input Order -->
										<div class="input-group">
											<div class="button minus">
												<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
													<i class="ti-minus"></i>
												</button>
											</div>
											<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
											<div class="button plus">
												<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
													<i class="ti-plus"></i>
												</button>
											</div>
											<input name="product_id_hidden" type="hidden" value="{{$product->product_id}}" />
										</div>
										<!--/ End Input Order -->
									</div>
									<div class="add-to-cart">
										<button type="submit" class="btn btn-fefault cart">
																			<i class="fa fa-shopping-cart"></i>
																				Thêm vào giỏ hàng
																		</button>
										<a href="#" class="btn min"><i class="ti-heart"></i></a>
										<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
									</div>
								</form>
                                    <div class="default-social">
										<h4 class="share-now">Share:</h4>
                                        <ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="youtube" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a class="dribbble" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Modal end -->
    @endforeach
	
	 <!-- Start Footer Area -->
        <footer class="footer">
            <!-- Footer Top -->
            <div class="footer-top section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer about">
                                <div class="logo">
                                    <a href="/"><img src="images/logo25.png" alt="#"></a>
                                </div>
                                <p class="text">Web bán áo thun giá tốt, sản phẩm chất lượng, thương hiệu uy tín, mua hàng nhanh chóng,tiện lợi</p>
                                <p class="call">Nếu có thắng mắc xin vui lòng liên hệ - 24/7<span><a href="tel:123456789">0123 456 789</a></span></p>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer links">
                                <h4>Thông tin</h4>
                                <ul>
                                    <li><a href="/">Về chúng tôi</a></li>
                                    <li><a href="#">Faq</a></li>
                                    <li><a href="#">Điều kiện pháp lý</a></li>
                                    <li><a href="#">Liên hệ</a></li>
                                    <li><a href="#">Trợ giúp</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-2 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer links">
                                <h4>Chăm sóc khách hàng</h4>
                                <ul>
                                    <li><a href="#">Hình thức thanh toán</a></li>
                                    <li><a href="#">Hoàn tiền</a></li>
                                    
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Chính sách bảo mật</a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-footer social">
                                <h4>Địa chỉ Shop</h4>
                                <!-- Single Widget -->
                                <div class="contact">
                                    <ul>
                                        <li>Khu phố 6, Phường Linh Trung, Quận Thủ Đức</li>
                                        <li>Thành phố Hồ Chí Minh</li>
                                        <li>info@simples.gq</li>
                                        <li>032 3456 7890</li>
                                    </ul>
                                </div>
                                <!-- End Single Widget -->
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                                    <li><a href="#"><i class="ti-flickr"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Top -->
            <div class="copyright">
                <div class="container">
                    <div class="inner">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="left">
                                    <p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Simples</a>  -  All Rights Reserved.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="right">
                                    <img src="images/payments.png" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /End Footer Area -->
	<!-- Jquery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{asset('js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{asset('js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{asset('js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{asset('js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{asset('js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{asset('js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{asset('js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{asset('js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{asset('js/active.js')}}"></script>
</body>
</html>