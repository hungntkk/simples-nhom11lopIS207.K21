<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/ico/favicon.ico">
	<!-- Title Tag  -->
    <title>Simples.gq - Shop áo thun đẹp cho mọi người</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
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
	<!-- Jquery Ui -->
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">

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


	<link rel="stylesheet" href="{{asset('css/1animate.css')}}">
	<link rel="stylesheet" href="{{asset('css/1bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/1font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/1price-range.css')}}">
    <link rel="stylesheet" href="{{asset('css/1prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('css/1main.css')}}">
	<link rel="stylesheet" href="{{asset('css/1responsive.css')}}">
	
	
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
									<li><i class="ti-headphone-alt"></i> 0981 234 5678</li>
									<li><i class="ti-email"></i> support@simples.com</li>
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
                                    			<a class="nav-link" href="{{ route('register') }}">{{ __('Đăng kí') }}</a>
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
                                        		{{ __('Logout') }}
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
								<a href="/"><img src="{{asset('images/logo15.png')}}" alt="logo"></a>
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
											<a href="{{URL::to('/delete-to-cart-shop/'.$v_content->rowId)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
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
							<div class="col-12">
								<div class="menu-area">
									<!-- Main Menu -->
									<nav class="navbar navbar-expand-lg">
										<div class="navbar-collapse">	
											<div class="nav-inner">	
												<ul class="nav main-menu menu navbar-nav">
													<li><a href="/">Trang chủ</a></li>
													<li class="active"><a href="/shop">Shop<i></i><span class="new">New</span></a>
														
													</li>
													<li><a href="/design-shirt">Tự thiết kế áo thun</a></li>									
													<li><a href="/blog">Blog<i></i></a>
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
		
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.html">Shop</a></li>
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
						@yield('content')
						<div class="row">
							<div class="col-12">
							</div>
						</div>

						
						<div class="row">
							@foreach($all_product as $key => $product)
							<a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"></a>
							<div class="col-lg-4 col-md-6 col-12">
								<div class="single-product">
									{{-- them vao gio hang --}}
								<form action="{{URL::to('/them-cart-shop')}}" method="POST">
									{{csrf_field()}}
									<div class="product-img">
										<a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
											<img src="{{URL::to('uploads/product/'.$product->product_image)}}" height="750" width="550">
											
										</a>
										<div class="button-head">
											<div class="product-action">
												<a data-toggle="modal" data-target="#{{($product->product_id)}}" title="Xem nhanh" href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"><i class="ti-eye"></i><span>Xem nhanh</span></a>

												{{-- <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Thêm vào yêu thích</span></a> --}}
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
									</div>
								</form>
									<div class="product-content">
										<h3><a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">{{$product->product_name}}</a></h3>
										<div class="product-price">
											<span>{{number_format($product->product_price).' '.'VNĐ'}}</span>
										</div>
									</div>
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

		
		
		
		<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
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
													<img src="https://via.placeholder.com/569x528" alt="#">
												</div>
												<div class="single-slider">
													<img src="https://via.placeholder.com/569x528" alt="#">
												</div>
												<div class="single-slider">
													<img src="https://via.placeholder.com/569x528" alt="#">
												</div>
												<div class="single-slider">
													<img src="https://via.placeholder.com/569x528" alt="#">
												</div>
											</div>
										</div>
									<!-- End Product slider -->
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
									<div class="quickview-content">
										<h2>Flared Shift Dress</h2>
										<div class="quickview-ratting-review">
											<div class="quickview-ratting-wrap">
												<div class="quickview-ratting">
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="yellow fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<a href="#"> (1 customer review)</a>
											</div>
											<div class="quickview-stock">
												<span><i class="fa fa-check-circle-o"></i> in stock</span>
											</div>
										</div>
										<h3>$29.00</h3>
										<div class="quickview-peragraph">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam.</p>
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
													<h5 class="title">Color</h5>
													<select>
														<option selected="selected">orange</option>
														<option>purple</option>
														<option>black</option>
														<option>pink</option>
													</select>
												</div>
											</div>
										</div>
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
											</div>
											<!--/ End Input Order -->
										</div>
										<div class="add-to-cart">
											<a href="#" class="btn">Add to cart</a>
											<a href="#" class="btn min"><i class="ti-heart"></i></a>
											<a href="#" class="btn min"><i class="fa fa-compress"></i></a>
										</div>
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
									<a href="/"><img src="{{asset('images/logo25.png')}}" alt="#"></a>
								</div>
								<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
								<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
							</div>
							<!-- End Single Widget -->
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer links">
								<h4>Information</h4>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Faq</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
							<!-- End Single Widget -->
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer links">
								<h4>Customer Service</h4>
								<ul>
									<li><a href="#">Payment Methods</a></li>
									<li><a href="#">Money-back</a></li>
									<li><a href="#">Returns</a></li>
									<li><a href="#">Shipping</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>
							<!-- End Single Widget -->
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Single Widget -->
							<div class="single-footer social">
								<h4>Get In Tuch</h4>
								<!-- Single Widget -->
								<div class="contact">
									<ul>
										<li>NO. 342 - London Oxford Street.</li>
										<li>012 United Kingdom.</li>
										<li>info@eshop.com</li>
										<li>+032 3456 7890</li>
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
									<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
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
	<!-- Fancybox JS -->
	<script src="{{asset('js/facnybox.min.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{asset('js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{asset('js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{asset('js/nicesellect.js')}}"></script>
	<!-- Ytplayer JS -->
	<script src="{{asset('js/ytplayer.min.js')}}"></script>
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


	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/price-range.js')}}"></script>
	<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
</body>
</html>