	@extends('site.master')
	<?php 
	if (isset($product)) {
			dd($product->name);
	}
	?>
	@section('title') 
	{{$product->name}}
	@endsection
	@section('style')
	<link rel="stylesheet" type="text/css" href="js/quickview/magnific-popup.css">
	@endsection

	@section('content')
	<div class="breadcrumbs">
		<div class="container">
			<h2 class="category-name">detail sidebar right</h2>
			<ul class="breadcrumb">
				<li>
					<a href="index.php" class="smooth" title="">Home</a>
				</li>
				<li>
					<a href="category.php" class="smooth" title="">Listing Grid</a>
				</li>
				<li>
					<a href="detail-sidebar-right.php" class="smooth" title="">{{$product->name}}</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- DETAIL SIDEBAR -->
	<div class="detail-sidebar blog-detail">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 aside-detail-product">
					<button type="button" class="sidebar-toggle-btn"><i class="fa fa-align-left" aria-hidden="true"></i>SIDEBAR</button>
					<div class="sidebar-overlay"></div>
					<div class="product-detail-top">
						<div class="clearfix box">
							<div class="product-slider-box clearfix">
								<div class="main-slider-box">
									<a href="{{$product->image}}">
										<img src="{{$product->image}}">
									</a>
								</div>

							</div>
							<div class="product-infomation">
								<div class="product-box">
									<h1 class="product-name">{{$product->name}}</h1>
									<div class="star-rating" style="text-align: left;">
										<div class="star-base">
											<div class="star-rate" style="width: {{$product->rating / 5 *100 .'%'}}"></div>
											<a dt-value="1" href="#1"></a>
											<a dt-value="2" href="#2"></a>
											<a dt-value="3" href="#3"></a>
											<a dt-value="4" href="#4"></a>
											<a dt-value="5" href="#5"></a>
										</div>
									</div>
									<div class="review-box">
										<a href="#" class="smooth reviews-button"> 1 Reviews</a>
										<a href="#" class="smooth add-reviews">Add Your Rivew</a>
									</div>
									<div class="price">
										${{$product->price_new}} <span class="price-old">${{$product->price_old}}</span>
									</div>
									<div class="product-desc-box">
										<h4 class="product-desc-title">Quick Overview</h4>
										<p class="product-desc">{{$product->short_desc}}</p>
									</div>
									<div class="option-group">
										<div class="quantity-control-box">
											<label>Qty:</label>
											<input type="text" name="keyword" class="input-quantity only-number" value="1">
											<span class="quantity-control-btn quantity-add">+</span>
											<span class="quantity-control-btn quantity-minus">-</span>
										</div>
										<div class="button-group">
											<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
												<i class="fa fa-retweet" aria-hidden="true"></i>
											</button>
											<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
												ADD TO CART
											</button>
											<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</button>
										</div>
									</div>
									<div class="share-box">
										<h5 class="share-title">SHARE THIS PRODUCT</h5>
										<div class="fb-like marl5 fb_iframe_widget" data-href="https://web5s.info/demo/bangtanha/gioi-thieu-bang-flipchart-a-model-tan-ha" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;container_width=0&amp;href=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 122px; height: 20px;"><iframe name="f3bdea1d845d2c4" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.6/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fd_vbiawPdxB.js%3Fversion%3D44%23cb%3Df20be4dd5d3ce6%26domain%3Dweb5s.info%26origin%3Dhttps%253A%252F%252Fweb5s.info%252Ff29a7f99d1644ac%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 122px; height: 20px;" class="mrr5"></iframe></span></div>
										<iframe id="twitter-widget-1" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" style="position: static; visibility: visible; width: 60px; height: 20px; margin-bottom: 8px; margin-left: 4px;" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.2e9f365dae390394eb8d923cba8c5b11.vi.html#dnt=false&amp;id=twitter-widget-1&amp;lang=vi&amp;original_referer=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha&amp;size=m&amp;text=Gi%E1%BB%9Bi%20thi%E1%BB%87u%20b%E1%BA%A3ng%20Flipchart%20A%20Model%20T%C3%A2n%20H%C3%A0&amp;time=1557474728906&amp;type=share&amp;url=https%3A%2F%2Fweb5s.info%2Fdemo%2Fbangtanha%2Fgioi-thieu-bang-flipchart-a-model-tan-ha" data-url="https://web5s.info/demo/bangtanha/gioi-thieu-bang-flipchart-a-model-tan-ha"></iframe>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div class="content-product">

						<div class="content-product-tab clearfix">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#description" class="smooth">description</a></li>
								<li><a data-toggle="tab" href="#reviews" class="smooth">reviews</a></li>
								<li><a data-toggle="tab" href="#product-tags" class="smooth">product tags</a></li>
								<li><a data-toggle="tab" href="#custom-tabs" class="smooth">custom tabs</a></li>
							</ul>

							<div class="tab-content">
								<div id="description" class="tab-pane fade in active" class="s-content">
									{{$product->detail}}
								</div>
								<div id="reviews" class="tab-pane fade">
									@if($errors->any())
									<div class="alert alert-danger">
										<ul>
											@foreach($errors->all() as $error)
											<li>{{$error}}</li>
											@endforeach
										</ul>
									</div>
									@endif
									<form class="reviews-form" action="{{route('adcomments.create-comment')}}" method="post">
										@csrf
										<input type="hidden" name="product_id" value="{{$product->id}}">
										<h4 class="form-title">Write A Review</h4>
										<div class="form-group">
											<label>Your Name</label>
											<input type="text" name="user_name" placeholder="Your Name" class="form-control">
										</div>
										<div class="form-group">
											<label>Title</label>
											<input type="text" name="title" placeholder="Your Title" class="form-control">
										</div>
										<div class="form-group">
											<label>Your Review</label>
											<textarea placeholder="Your Review" name="message"></textarea>
										</div>
										<div class="form-check form-check-inline">
											<label class="form-check-label" for="inlineRadio1">
												Bad
											</label>
											<input class="form-check-input" type="radio" name="star_rate">
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="star_rate" id="inlineRadio2" value="2">
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="star_rate" id="inlineRadio2" value="3">
										</div>
										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="star_rate" id="inlineRadio2" value="4">
										</div>

										<div class="form-check form-check-inline">
											<input class="form-check-input" type="radio" name="star_rate" id="inlineRadio3" value="5">
											<label class="form-check-label" for="inlineRadio3">Good</label>
										</div>
										<button type="submit" class="smooth hv-border-inline">CONTINUTE</button>
									</form>
								</div>
								<div id="product-tags" class="tags-tab tab-pane fade">
									<a href="#" class="smooth active tag" title="">fashion </a>
									<a href="#" class="smooth tag" title="">gift </a>
									<a href="#" class="smooth tag" title="">shoes </a>
									<a href="#" class="smooth tag" title="">woman </a>
									<a href="#" class="smooth tag" title="">electric </a>
									<a href="#" class="smooth tag" title="">cameras </a>
									<a href="#" class="smooth tag" title="">cakes </a>
									<a href="#" class="smooth tag" title="">birthday </a>
									<a href="#" class="smooth tag" title="">annivaersary </a>
									<a href="#" class="smooth tag view-all" title="">View all Tags <i class="fa fa-caret-right"></i></a>
								</div>
								<div id="custom-tabs" class="tab-pane fade">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
							</div>
						</div>
					</div>

					<!-- RELEATED PRODUCTS -->
					<div class="featured-products releated-products">
						<h2 class="featured-title">
							<span>
								RELEATED <span>PRODUCTS</span>
							</span>
						</h2>
						<div class="featured-slider yt-content-slider" data-autoplay="yes" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="3" data-items_column1="3" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
							@foreach($releated_pro as $re_pro)
							<div class="item">
								<div class="product-box">
									<div class="product-image">
										<a href="{{route('product-detail' , $re_pro->id)}}" class="c-img link-product">
											<img src="{{$re_pro->image}}" class="img-responsive" alt="{{$re_pro->name}}">
										</a>
									</div>
									<div class="product-info">
										<h4 class="product-name"><a href="route('product-detail' , $re_pro->id)" class="smooth" title="">{{$re_pro->name}}</a></h4>
										<div class="price">
											${{$re_pro->price_new}} <span class="price-old">${{$re_pro->price_old}}</span>
										</div>
										<div class="star-rating">
											<div class="star-base">
												<div class="star-rate" style="width: {{$re_pro->rating / 5 *100 .'%'}}"></div>
												<a dt-value="1" href="#1"></a>
												<a dt-value="2" href="#2"></a>
												<a dt-value="3" href="#3"></a>
												<a dt-value="4" href="#4"></a>
												<a dt-value="5" href="#5"></a>
											</div>
										</div>
									</div>
									<div class="button-group">
										<button class="wishlist-btn smooth" onclick="window.location.href='compare.php'">
											<i class="fa fa-retweet" aria-hidden="true"></i>
										</button>
										<button class="add-to-cart smooth" onclick="window.location.href='cart.php'">
											ADD TO CART
										</button>
										<button class="wishlist-btn smooth" onclick="window.location.href='wishlist.php'">
											<i class="fa fa-heart" aria-hidden="true"></i>
										</button>
									</div>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<!-- //RELEATED PRODUCTS -->
					<div class="comment-container">
						<h3 class="title-underline">COMMENT</h3>
						<div class="comment-box">
							<div class="comment-box-top clearfix">
								<div class="comment-top-right">
									<div class="comment-box-title"><h6>Tran quang</h6>
									</div>
									<div>tranquang@gmail.com</div>
									<div class="comment-rating">
										<div class="rating">
											<div class="rating-box">
												<span class="fa fa-stack">
													<i class="fa fa-star fa-stack-1x"></i>
													<i class="fa fa-star-o fa-stack-1x"></i>
												</span>
												<span class="fa fa-stack">
													<i class="fa fa-star fa-stack-1x"></i>
													<i class="fa fa-star-o fa-stack-1x"></i>
												</span>
												<span class="fa fa-stack">
													<i class="fa fa-star fa-stack-1x"></i>
													<i class="fa fa-star-o fa-stack-1x"></i>
												</span>
												<span class="fa fa-stack">
													<i class="fa fa-star fa-stack-1x"></i>
													<i class="fa fa-star-o fa-stack-1x"></i>
												</span>
												<span class="fa fa-stack">
													<i class="fa fa-star-o fa-stack-1x"></i>
												</span>
											</div>
										</div>
										<h5 class="comment-box-title">
											Great Theme for customer
										</h5>
									</div>
									<div class="blog-item-info-post">
										<div class="blog-info-post-item">
											<i class="fa fa-clock-o" aria-hidden="true"></i>22 Apr 2015
										</div>
										<div class="blog-info-post-item">
											<i class="fa fa-user"></i>Super User
										</div>
										<div class="blog-info-post-item">
											<i class="fa fa-folder-open-o" aria-hidden="true"></i>Blog
										</div>
										<div class="blog-info-post-item">
											<i class="fa fa-comments-o" aria-hidden="true"></i>3 Comments
										</div>
									</div>
								</div>
							</div>
							<div class="comment-box-center">
								<p class="desc">
									Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								</p>
							</div>
						</div>
					</div>
				</div>
				<aside class="col-lg-3 col-md-3 aside-left">
					<span class="close-aside-left"><i class="fa fa-times" aria-hidden="true"></i></span>
					<div class="aside-best-seller">
						<h3 class="aside-title">BEST SELLER</h3>
						@foreach($sell as $sell)
						<div class="deals-box product-info clearfix">
							<div class="product-image-right" style="width: 110px;">
								<a href="detail.php" class="hv-radial c-img">
									<img src="{{$sell->image}}" alt="{{$sell->name}}">
								</a>
							</div>
							<div class="box">
								<h5 class="product-name"><a href="#" class="smooth" title="{{$sell->name}}">{{$sell->name}}</a></h5>
								<div class="star-rating" style="margin: 5px 0; text-align: left;">
									<div class="star-base">
										<div class="star-rate" style="width: {{$sell->rating / 5 *100 .'%'}}"></div>
										<a dt-value="1" href="#1"></a>
										<a dt-value="2" href="#2"></a>
										<a dt-value="3" href="#3"></a>
										<a dt-value="4" href="#4"></a>
										<a dt-value="5" href="#5"></a>
									</div>
								</div>
								<div class="price">${{$sell->price_new}} <span class="price-old">${{$sell->price_old}}</span></div>
							</div>
						</div>
						@endforeach
					</div>

					<div class="aside-tags">
						<h3 class="aside-title">
							HOT TAGS
						</h3>
						<a href="#" class="smooth active tag" title="">fashion </a>
						<a href="#" class="smooth tag" title="">gift </a>
						<a href="#" class="smooth tag" title="">shoes </a>
						<a href="#" class="smooth tag" title="">woman </a>
						<a href="#" class="smooth tag" title="">electric </a>
						<a href="#" class="smooth tag" title="">cameras </a>
						<a href="#" class="smooth tag" title="">cakes </a>
						<a href="#" class="smooth tag" title="">birthday </a>
						<a href="#" class="smooth tag" title="">annivaersary </a>
						<a href="#" class="smooth tag view-all" title="">View all Tags <i class="fa fa-caret-right"></i></a>
					</div>

					<div class="aside-banner">
						<a href="#" title="" class="hv-full-light">
							<img src="image/catalog/demo/banners/another/banner1.png" class="img-responsive" alt="">
						</a>
					</div>
				</aside>
			</div>
		</div>
	</div>

	<!-- //DETAIL SIDEBAR -->

	@endsection

	@section('javascript')
	<script type="text/javascript" src="js/quickview/jquery.magnific-popup.min.js"></script>
	@endsection
