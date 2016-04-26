

<body>

	<div id="mainContainer" class="clearfix">

		<!--begain header-->
		
		<!-- end header -->



		<div class="container">

			<div class="row">

				<div class="span8">
					<div class="flexslider">
					<?php foreach($daftar_produk as $p){ ?>
						<ul class="slides">
							<?php echo  "<li><img src=". base_url($p->gbr_produk) ." alt='slide1'></li>"; ?>
						</ul>
					<?php } ?>
					</div><!--end flexslider-->
				</div><!--end span8-->


				<div class="span4">

					<div id="homeSpecial">
						<div class="titleHeader clearfix">
							<h3>Special</h3>
							<div class="pagers">
								<div class="btn-toolbar">
									<div class="btn-group">
										<button class="btn btn-mini vNext"><i class="icon-caret-down"></i></button>
										<button class="btn btn-mini vPrev"><i class="icon-caret-up"></i></button>
									</div>
									<button class="btn btn-mini">View All</button>
								</div>
							</div>
						</div><!--end titleHeader-->

						<!-- iklan -->
						<ul class="vProductItems cycle-slideshow vertical clearfix"
					    data-cycle-fx="carousel"
					    data-cycle-timeout=0
					    data-cycle-slides="> li"
					    data-cycle-next=".vPrev"
					    data-cycle-prev=".vNext"
					    data-cycle-carousel-visible="2"
					    data-cycle-carousel-vertical="true">
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											hahaha
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
						</ul>
					</div><!--end special-->
				</div><!--end span4-->

			</div><!--end row-->



			<div class="row">
				<div class="span12">

					<div id="featuredItems">
						
						<div class="titleHeader clearfix">
							<h3>Produk Ternak</h3>
							<div class="pagers">
								<div class="btn-toolbar">
									<button class="btn btn-mini" action="haha.php">View All</button>
								</div>
							</div>
						</div><!--end titleHeader-->

						<div class="row">

							<ul class="hProductItems clearfix">
								<?php foreach($daftar_produk as $p){	?>
								<li class="span3 clearfix">
									<div class="thumbnail">
										<a href="#"><img src="<?php echo base_url($p->gbr_produk);?>" alt=""></a>
									</div>
									<div class="thumbSetting">
										<div class="thumbTitle">
											<a href="#" class="invarseColor">
												<?php echo $p->nama_produk; ?>
											</a>
										</div>
										<div class="thumbPrice">
											<span> Rp. <?php echo $p->harga_produk; ?></span>
										</div>

										<div class="thumbButtons">
											
											<a href="<?php echo base_url(); ?>ecomerce/shoppingcart/buy/<?php echo $p->id_produk; ?>">
												<button class="btn btn-primary btn-small" data-title="Beli Produk" data-placement="top" data-toggle="tooltip">
													<i class="icon-shopping-cart"></i> 
												</button>
											</a>
											<button class="btn btn-small" data-title="+To WishList" data-placement="top" data-toggle="tooltip">
												<i class="icon-heart"></i>
											</button>
										
											<button class="btn btn-small" data-title="+To Compare" data-placement="top" data-toggle="tooltip">
												<i class="icon-refresh"></i>
											</button>

										</div>

										<ul class="rating">
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-off"></i></li>
										</ul>
									</div>
								</li>
								<?php }?>
								
							</ul>
						</div><!--end row-->
					</div><!--end featuredItems-->
				</div><!--end span12-->
			</div><!--end row-->

			


			<div class="row">
				<div class="span12">
					<div id="brands">
						<div class="titleHeader clearfix">
							<h3>Brands</h3>
							<div class="pagers">
								<div class="btn-toolbar">
									<button class="btn btn-mini">View All</button>
								</div>
							</div>
						</div><!--end titleHeader-->
						<ul class="brandList clearfix">
							<li>
								<a href="#"><img src="<?php echo base_url(); ?>ecom/img/Layer-4.png" alt="logo"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo base_url(); ?>ecom/img/Layer-1.png" alt="logo"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo base_url(); ?>ecom/img/Layer-3.png" alt="logo"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo base_url(); ?>ecom/img/Layer-2.png" alt="logo"></a>
							</li>
						</ul>
					</div><!--end brands-->
				</div><!--end span12-->
			</div><!--end row-->

		</div><!--end conatiner-->


		<!--begain footer-->
		
		<!--end footer-->

	</div><!--end mainContainer-->


	<!-- Sidebar Widget
	================================================== -->
	<div class="switcher">
		<h3>Site Switcher</h3>
		<a class="Widget-toggle-link">+</a>

		<div class="switcher-content clearfix">
			<div class="layout-switch">
				<h4>Layout Style</h4>
				<div class="btn-group">
					<a id="wide-style" class="btn">Wide</a>
	  				<a id="boxed-style" class="btn">Boxed</a>
				</div>
			</div><!--end layout-switch-->

			<div class="color-switch clearfix">
				<h4>Color Style</h4>
				<a id="orange-color" class="color-switch-link">orange</a>
				<a id="blue-color" class="color-switch-link">blue</a>
				<a id="green-color" class="color-switch-link">green</a>
				<a id="brown-color" class="color-switch-link">brown</a>
				<a id="red-color" class="color-switch-link">red</a>
			</div><!--end color-switch-->

			<div class="pattern-switch">
				<h4>BG Pattern</h4>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/retina_wood.png);">retina_wood</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/bgnoise_lg.png);">bgnoise_lg</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/purty_wood.png);">purty_wood</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/irongrip.png);">irongrip</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/low_contrast_linen.png);">low_contrast_linen</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/tex2res5.png);">tex2res5</a>
				<a style="background:url(<?php echo base_url(); ?>ecom/img/backgrounds/wood_pattern.png);">wood_pattern</a>
			</div><!--end pattern-switch-->

		</div><!--end switcher-content-->
	</div>
	<!-- End Sidebar Widget-->


	<!-- JS
	================================================== -->
	<script src="<?php echo base_url(); ?>ecom/ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>ecom/ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
    <!-- jQuery.Cookie -->
	<script src="<?php echo base_url(); ?>ecom/js/jquery.cookie.js"></script>
	<!-- bootstrap -->
    <script src="<?php echo base_url(); ?>ecom/js/bootstrap.min.js"></script>
    <!-- flexslider -->
    <script src="<?php echo base_url(); ?>ecom/js/jquery.flexslider-min.js"></script>
    <!-- cycle2 -->
    <script src="<?php echo base_url(); ?>ecom/js/jquery.cycle2.min.js"></script>
    <script src="<?php echo base_url(); ?>ecom/js/jquery.cycle2.carousel.min.js"></script>
    <!-- tweets -->
    <script src="<?php echo base_url(); ?>ecom/js/jquery.tweet.js"></script>
    <!-- fancybox -->
    <script src="<?php echo base_url(); ?>ecom/js/fancybox/jquery.fancybox.js"></script>
    <!-- custom function-->
    <script src="<?php echo base_url(); ?>ecom/js/custom.js"></script>
    
</body>
