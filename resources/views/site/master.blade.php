<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic page needs
	============================================ -->
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="keywords" content="html template, furniture html template, interior html template, furniture & interior html template, best html template, best furniture template, best furniture theme, furniture theme, theme for furniture" />
	<meta name="description" content="Furnicom is an awesome premium HTML template for any kind of online store, especially for furniture, interior, decoration, design studio and more. Quickly & easily build your website just by some clicks." />
	<meta name="author" content="Smartaddons">
	<meta name="robots" content="index, follow" />
<!-- Mobile specific metas
	============================================ -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" type="image/png" href="ico/favicon-16x16.png"/>
<!-- Libs CSS
	============================================ -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css')}}">
	<link href="{{ asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- <link href="{{ asset('js/datetimepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet"> -->
	<link href="{{ asset('js/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<!-- <link href="{{ asset('css/themecss/lib.css')}}" rel="stylesheet"> -->
	<!-- <link href="{{ asset('js/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet"> -->
	<!-- <link href="{{ asset('js/minicolors/miniColors.css')}}" rel="stylesheet"> -->
<!-- Theme CSS
	============================================ -->
	<!-- <link href="{{ asset('css/themecss/so_sociallogin.css')}}" rel="stylesheet"> -->
	<!-- <link href="{{ asset('css/themecss/so_searchpro.css')}}" rel="stylesheet"> -->
	<link href="{{ asset('css/themecss/so_megamenu.css')}}" rel="stylesheet">
	<!-- <link href="{{ asset('css/themecss/so-categories.css')}}" rel="stylesheet"> -->
	<link href="{{ asset('css/themecss/so-listing-tabs.css')}}" rel="stylesheet">
	<!-- <link href="{{ asset('css/themecss/so-category-slider.css')}}" rel="stylesheet"> -->
	<!-- <link href="{{ asset('css/themecss/so-newletter-popup.css')}}" rel="stylesheet"> -->
	<link href="{{ asset('css/footer/footer1.css')}}" rel="stylesheet">
	<link href="{{ asset('css/header/header1.css')}}" rel="stylesheet">
	<link id="color_scheme" href="{{ asset('css/theme.css')}}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css')}}" rel="stylesheet">
	<link href="{{ asset('css/quickview/quickview.css')}}" rel="stylesheet">
	@yield('style')
	<link href="{{ asset('css/app.css')}}" rel="stylesheet">
<!-- Google web fonts
	============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<style>
	body{
		font-family: 'Poppins', sans-serif;
	}
</style>
</head>

<body class="commpn-here res layout-1">

	<div id="wrapper" class="wrapper-fluid banner-effect-3">
		<!-- HEADER CONTAINER -->
		<header class="typeheader-1">
			<!-- HEADER TOP -->
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-9">
							<div class="header-user"> 
								<ul>
									<li>
										<a href="#" class="smooth dropdown-toggle" data-toggle="dropdown" title="">USD
											<i class="fa fa-caret-down dropdown-icon" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="#" class="smooth" title="">USD</a>
											</li>
											<li>
												<a href="#" class="smooth" title="">UER</a>
											</li>
										</ul>
									</li>
									<li>
										<img src="image/catalog/england.png" class="lang-img" alt="">
										<a href="#" class="smooth dropdown-toggle" data-toggle="dropdown" title=""><span class="hidden-md hidden-sm hidden-xs">English</span>
											<i class="fa fa-caret-down dropdown-icon" aria-hidden="true"></i>
										</a>
										<ul class="dropdown-menu">
											<li>
												<a href="#" class="smooth" title="">
													<span><img src="image/catalog/england.png" alt="" class="lang-img"></span>
												English</a>
											</li>
											<li>
												<a href="#" class="smooth" title="">
													<span><img src="image/catalog/ar-ar.png" alt="" class="lang-img"></span>
												Arabic</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="my-account.php" class="smooth" title="">
											<i class="fa fa-user" aria-hidden="true"></i>
										My Account</a>
									</li>
									<li>
										<a href="wishlist.php" class="smooth" title="">
											<i class="fa fa-heart"></i>
										My Wishlist</a>
									</li>
									<li>
										<a href="checkout.php" class="smooth" title="">
											<i class="fa fa-check-square-o" aria-hidden="true"></i>
										Checkout</a>
									</li>

								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-3">
							<div class="header-hotline">
								<div class="item">
									<p>
										<a href="#" class="smooth" title="">
											Start 
											<span>LIVE CHAT</span>
										</a>
									</p>
								</div>
								<div class="item">
									<p>
										<span class="hidden-md">Call our customer service at:</span> <a href="tel:096-999-8386" class="smooth" title=""><span>096-999-8386</span></a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //HEADER TOP -->

			<!-- HEADER CENTER -->
			<div class="header-center">
				<div class="container">
					<div class="logo">
						<a href="index.php" class="" title="">
							<img src="image/catalog/demo/logo/logo.png" alt="">
						</a>
					</div>
					<div class="search-form">
						<button type="button" class="smooth search-form-btn"><i class="fa fa-search"></i></button>
						<form action="#" method="post">
							<div class="icon">
								<i class="fa fa-search" aria-hidden="true"></i>
							</div>
							<input type="text" name="keyword" placeholder="Enter your keyword...">
							<button type="submit">Search</button>
						</form>
					</div>
					<div class="shipping">
						<img src="image/catalog/demo/header/shipping-bg.png" alt="">
						<div class="shipping-info">
							<h6 class="shipping-title">Everyday Free Shipping</h6>
							<p class="shipping-desc">& No Sales Tax</p>
						</div>
					</div>
					<div class="cart">
						<a href="cart.php" class="smooth cart-box dropdown-toggle" title="" data-toggle="dropdown">
							<img src="image/catalog/demo/header/cart.png" class="cart-image" alt="">
							<p class="quantity">0 item(s) - $0.00</p>
							<p class="cart-title">MY CART</p>
						</a>
						<ul class="dropdown-menu shopping-cart">
							<li class="shopping-cart-title clearfix">
								<label>Your Product</label>
								<label>Price</label>
							</li>
							<li class="product-item">
								<table class="table cart-table">
									<tbody>
										<tr>
											<td class="product-item-image">
												<a href="detail.php" class="" title="">
													<img src="image/catalog/demo/products/cart-product1.png" alt="" class="img-responsive">
												</a>
												<button class="remove-product-cart smooth">
													<i class="fa fa-times"></i>
												</button>
											</td>
											<td class="product-item-name">
												<h4 class="product-name">
													<a href="detail.php" class="smooth" title="">Diam nonummy nibh</a>
												</h4>
												<span class="product-item-quantity">Quantity: 01</span>
											</td>
											<td class="product-item-price">
												<span class="shopping-price">$320.00</span>
											</td>
										</tr>
										<tr>
											<td class="product-item-image">
												<a href="detail.php" class="" title="">
													<img src="image/catalog/demo/products/cart-product2.png" alt="" class="img-responsive">
												</a>
												<button class="remove-product-cart smooth">
													<i class="fa fa-times"></i>
												</button>
											</td>
											<td class="product-item-name">
												<h4 class="product-name">
													<a href="detail.php" class="smooth" title="">Diam nonummy nibh</a>
												</h4>
												<span class="product-item-quantity">Quantity: 01</span>
											</td>
											<td class="product-item-price">
												<span class="shopping-price">$450.00</span>
											</td>
										</tr>
										<tr>
											<td class="product-item-image">
												<a href="detail.php" class="" title="">
													<img src="image/catalog/demo/products/cart-product3.png" alt="" class="img-responsive">
												</a>
												<button class="remove-product-cart smooth">
													<i class="fa fa-times"></i>
												</button>
											</td>
											<td class="product-item-name">
												<h4 class="product-name">
													<a href="detail.php" class="smooth" title="">Diam nonummy nibh</a>
												</h4>
												<span class="product-item-quantity">Quantity: 01</span>
											</td>
											<td class="product-item-price">
												<span class="shopping-price">$250.00</span>
											</td>
										</tr>
									</tbody>
								</table>
							</li>
							<li class="total-price clearfix">
								<label class="total-title">TOTAL:</label>
								<label class="float-right">$1030.00</label>
							</li>
							<li class="shopping-cart-checkout">
								<a href="cart.php" class="smooth" title="">GO TO CART</a>
								<a href="checkout.php" class="smooth" title="">CHECKOUT</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- //HEADER CENTER -->

			<!-- HEADER BOTTOM -->
			<div class="header-bottom">
				<div class="container">
					<div class="header-bottom-left">
						<div class="header-menu">
							<div class="megamenu-style-dev megamenu-dev">
								<div class="responsive">
									<nav class="navbar-default">
										<div class="container-megamenu-horizontal">
											<div class="nav-bar-header">
												<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle smooth">
													<i class="fa fa-bars" aria-hidden="true"></i>
												</button>
											</div>
											<div class="megamenu-wrapper">
												<span id="remove-megamenu"><i class="fa fa-times" aria-hidden="true"></i></span>
												<div class="megamenu-pattern">
													<div class="container1">
														<ul class="megamenu clearfix" data-transition="fade" data-animationtime="500">
															<li class="full-width menu-home">
																<a href="index.php" class="smooth cleafix" title="">
																	<i class="fa fa-home"></i>
																</a>
															</li>
															<li class="full-width menu-dinning with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="#" class="smooth cleafix" title="">
																	SMARTPHONE
																	<b class="caret"></b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="html">
																					<div class="row">
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Android</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Samsung</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Xiaomi</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Huawei</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Razer</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Sony Xperia</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Oppo</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image2.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">IOS</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Iphone Xs
																												<span class="menu-label menu-label-new">New</span>
																											</a>
																											<ul>
																												<li>
																													<a href="#" class="smooth" title="">iPhone Xs Max 512GB
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">iPhone Xs Max 256GB
																													</a>
																												</li>
																											</ul>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">iPhone X
																												<span class="menu-label menu-label-hot">Hot</span>
																											</a>
																											<ul>
																												<li>
																													<a href="#" class="smooth" title="">iPhone X 64GB Silver
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">iPhone X 64GB Space Grey
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">iPhone X 64GB Space Gold
																													</a>
																												</li>
																												<li>
																													<a href="#" class="smooth" title="">Small Coffee Tables
																													</a>
																												</li>

																											</ul>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">iPhone XR
																												</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">iPhone 8</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">iPhone 7</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">iPhone 6</a>
																										</li>

																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image3.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">Windows Phone</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Large Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Small Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Coffee Table sets</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">End Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Console Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Set Of Tables</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<div class="static-menu-image">
																									<img src="image/catalog/demo/slider/home1/static-menu-image4.jpg" alt="">
																								</div>
																								<a href="#" class="smooth title-submenu" title="">BlackBerry OS</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="#" class="smooth" title="">Large Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Small Coffee Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Coffee Table sets</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">End Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Console Tables</a>
																										</li>
																										<li>
																											<a href="#" class="smooth" title="">Set Of Tables</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="full-width menu-bedroom with-sub-menu hover">
																<p class="close-menu"></p>
																<a href="category2.php" class="smooth cleafix" title="">
																	LAPTOP
																	<b class="caret"></b>
																</a>
																<div class="sub-menu">
																	<div class="content">
																		<div class="row">
																			<div class="col-sm-12">
																				<div class="html">
																					<div class="row">
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">listing Pages</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="category.php" class="smooth" title="">Category Page 1</a>
																										</li>
																										<li>
																											<a href="category2.php" class="smooth" title="">Category Page 2</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">Product Pages</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="detail.php" class="smooth" title="">Product Detail
																											</a>
																										</li>
																										<li>
																											<a href="detail-sidebar.php" class="smooth" title="">Product Detail Sidebar
																											</a>
																										</li>
																										<li>
																											<a href="detail-sidebar-right.php" class="smooth" title="">Product Detail Sidebar Right
																											</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">Shopping Pages</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="cart.php" class="smooth" title="">Shopping Cart Page</a>
																										</li>
																										<li>
																											<a href="checkout.php" class="smooth" title="">Checkout Page</a>
																										</li>
																										<li>
																											<a href="compare.php" class="smooth" title="">Compare Page</a>
																										</li>
																										<li>
																											<a href="wishlist.php" class="smooth" title="">Wishlist Page</a>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																						<div class="col-md-3">
																							<div class="column">
																								<a href="#" class="smooth title-submenu" title="">MY ACCOUNT PAGES</a>
																								<div>
																									<ul class="row-list">
																										<li>
																											<a href="my-account.php" class="smooth" title="">My Account Page</a>
																										</li>
																										<li>
																											<a href="login.php" class="smooth" title="">Login Page</a>
																										</li>
																										<li>
																											<a href="register.php" class="smooth" title="">Register Page</a>
																										</li>
																										<li>
																											<a href="order-history.php" class="smooth" title="">Order History</a>
																										</li>
																										<li>
																											<a href="order-infomation.php" class="smooth" title="">Order Infomation</a>
																										</li>
																										<li>
																											<a href="product-return.php" class="smooth" title="">Product Returns</a>
																										</li>
																										<li>
																											<a href="gift-voucher.php" class="smooth" title="">Gift Voucher</a>
																										</li>

																									</ul>
																								</div>
																							</div>
																						</div>

																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
															<li class="full-width menu-contact">
																<a href="listing-blog.php" class="smooth cleafix" title="">
																	BLOG
																</a>
															</li>
															
															<li class="full-width menu-contact">
																<a href="about-us.php" class="smooth cleafix" title="">
																	ABOUT
																</a>
															</li>

															<li class="full-width menu-contact">
																<a href="contact-us.php" class="smooth cleafix" title="">
																	CONTACT
																</a>
															</li>
															<li class="menu-hot-deals"> 
																<a href="admin" class="smooth" title>ADMIN</a>
															</li>

														</ul>
													</div>
												</div>
											</div>
										</div>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<div class="header-bottom-right">
						<ul>
							<li>
								<a href="#" class="smooth" title>
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="smooth" title>
									<i class="fa fa-wifi" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="smooth" title>
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="smooth" title>
									<i class="fa fa-google-plus" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="#" class="smooth" title>
									<i class="fa fa-podcast" aria-hidden="true"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- //HEADER BOTTOM -->
		</header>
		<!-- //HEADER CONTAINER -->

		@yield('content')



		<footer class="typefooter-1">
			<!-- NEWLETTER -->
			<div class="newletter">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 newletter-left">
							<h4 class="new-letter-title">NEED HELP? CALL OUR AWARD-WINNING </h4>
							<p>SUPPORT TEAM 24/7 AT <a href="tel:(844)555-8386">(844) 555-8386</a></p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 newletter-right">
							<form action="#" method="post" class="send-letter form-inline">
								<div class="form-group form-box">
									<input type="text" name="email" placeholder="Enter your email address" class="form-control">
									<button type="submit" class="form-control">SUBSCRIBE</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- //NEWLETTER -->
			<div class="footer-box">
				<!-- FOOTER MIDDLE -->
				<div class="footer-middle">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="footer-middle-box">
									<h3 class="footer-title">our service</h3>
									<ul class="footer-list">
										<li>
											<a href="#" class="smooth" title>Delivery Information</a>
										</li>
										<li>
											<a href="#" class="smooth" title>Returns</a>
										</li>
										<li>
											<a href="#" class="smooth" title>Terms & Conditions</a>
										</li>
										<li>
											<a href="#" class="smooth" title>Shipping & Refund</a>
										</li>
										<li>
											<a href="#" class="smooth" title>Specials</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="footer-middle-box">
									<h3 class="footer-title">Extras</h3>
									<ul class="footer-list">
										<li>
											<a href="#" class="smooth" title>Contact Us</a>
										</li>
										<li>
											<a href="#" class="smooth" title>return</a>
										</li>
										<li>
											<a href="#" class="smooth" title>special</a>
										</li>
										<li>
											<a href="#" class="smooth" title>brands</a>
										</li>
										<li>
											<a href="#" class="smooth" title>gift voucher</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="footer-middle-box">
									<h3 class="footer-title">my account</h3>
									<ul class="footer-list">
										<li>
											<a href="#" class="smooth" title>my order</a>
										</li>
										<li>
											<a href="#" class="smooth" title>My credit slips</a>
										</li>
										<li>
											<a href="#" class="smooth" title>My addresses</a>
										</li>
										<li>
											<a href="#" class="smooth" title>My personal info</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="footer-middle-box footer-middle-right">
									<h3 class="footer-title">contact us</h3>
									<ul class="contact-list">
										<li>
											<i class="fa fa-map-marker" aria-hidden="true"></i>Megnor Comp Pvt Limited, Trade Centre, Udhana Darwaja
										</li>
										<li>
											<i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:(91)-2613023333">(91)-261 3023333</a>
										</li>
										<li>
											<i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:demo@harvest.com">demo@harvest.com</a>
										</li>
									</ul>
									<div class="payment">
										<img src="image/catalog/demo/footer/paymen.png" class="img-responsive" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //FOOTER MIDDLE -->
				<!-- FOOTER BOTTOM -->
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="footer-bottom-left">
									<h6 class="footer-bottom-title">
										Download Our App
									</h6>
									<a href="#" class="d-inline-block">
										<img src="image/catalog/demo/footer/down-app.png" class="img-responsive" alt="">
									</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="footer-bottom-right">
									<h6 class="footer-bottom-title">
										Follow Us
									</h6>
									<ul class="footer-social">
										<li>
											<a href="#" class="smooth" title="">
												<i class="fa fa-facebook" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" class="smooth" title="">
												<i class="fa fa-twitter" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" class="smooth" title="">
												<i class="fa fa-wifi" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" class="smooth" title="">
												<i class="fa fa-google-plus" aria-hidden="true"></i>
											</a>
										</li>
										<li>
											<a href="#" class="smooth" title="">
												<i class="fa fa-pinterest" aria-hidden="true"></i>
											</a>
										</li>

									</ul>
								</div>
							</div>
							<div class="col-lg-12 col-sm-12 col-xs-12">
								<div class="copyright text-center">
									Furnicom HTML © 2019 Demo Store. All Rights Reserved. Designed by <a href="https://www.smartaddons.com/" target="_blank" class="smooth" title>SmartAddons.com</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- //FOOTER BOTTOM -->
			</div>
		</footer>
		<!-- //FOOTER -->
		<div class="back-to-top">
			<i class="fa fa-angle-up" aria-hidden="true"></i>
		</div>
	</div>
<!-- End Color Scheme
	============================================ -->
<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="js/slick-slider/slick.js"></script>
	<script type="text/javascript" src="js/themejs/libs.js"></script>
	<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<!-- <script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script> -->
	<!-- <script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script> -->
	<!-- <script type="text/javascript" src="js/minicolors/jquery.miniColors.min.js"></script> -->
	<script type="text/javascript" src="js/jquery.nav.js"></script>
	<!-- <script type="text/javascript" src="js/quickview/jquery.magnific-popup.min.js"></script> -->
<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="js/themejs/application.js"></script>
	<script type="text/javascript" src="js/themejs/homepage.js"></script>
	<script type="text/javascript" src="js/themejs/cd1.js"></script>
	<!-- <script type="text/javascript" src="js/themejs/addtocart.js"></script>   -->
	<script type="text/javascript" src="js/themejs/nouislider.js"></script>
	@yield('javascript')
	<script type="text/javascript" src="js/themejs/script.js"></script>
</body>
</html>