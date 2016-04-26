


					<div class="pro-range-slider">
						<div class="titleHeader clearfix">
							<h3>Cari Berdasarkan Harga</h3>
						</div><!--end titleHeader-->
						<div class="price-range">
							<p class="clearfix">
							  <label>Price:</label>
							  <input type="text" id="amount">
							</p>
							<div id="slider-range"></div>
						</div>
					</div><!--end pro-range-slider-->


					<div class="special">
						<div class="titleHeader clearfix">
							<h3>Produk Spesial</h3>
						</div><!--end titleHeader-->

						<ul class="vProductItemsTiny">
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the title here
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
								</div>
							</li>
						</ul>
					</div><!--end special-->

				</aside><!--end aside-->


				<div class="span9">

					<div id="productSlider" class="carousel slide">
						<!-- Carousel items -->
					    <div class="carousel-inner">
					      <div class="active item"><img src="<?php echo base_url(); ?>ecom/img/694x240.jpg" alt=""></div>
					      <div class="item"><img src="<?php echo base_url(); ?>ecom/img/694x240.jpg" alt=""></div>
					      <div class="item"><img src="<?php echo base_url(); ?>ecom/img/694x240.jpg" alt=""></div>
					    </div>

					    <!-- Carousel nav -->
					    <a class="carousel-control left" href="#productSlider" data-slide="prev">&lsaquo;</a>
					    <a class="carousel-control right" href="#productSlider" data-slide="next">&rsaquo;</a>
					</div><!--end productSlider-->


					<div class="productFilter clearfix">

						<div class="sortBy inline pull-left">
							Sort By
							<select name="sortItem">
								<option value="Default">Default</option>
								<option value="">Name (A-A)</option>
								<option value="">Name (Z-A)</option>
								<option value="">Price (Low-Hight)</option>
								<option value="">Price (Height-Low)</option>
								<option value="">Highest Rating</option>
								<option value="">Lowest Rating</option>
								<option value="">Model (A-Z)</option>
								<option value="">Model (Z-A)</option>
							</select>
						</div>

						<div class="showItem inline pull-left">
							Show
							<select name="showItem">
								<option value="15">15</option>
								<option value="25">25</option>
								<option value="50">50</option>
								<option value="75">75</option>
								<option value="100">100</option>
							</select>
						</div><!--end sortBy-->

						<div class="compareItem inline pull-left">
							<button class="btn">Product Compare (4)</button>
						</div><!--end compareItem-->

						<div class="displaytBy inline pull-right">
							Display
							<div class="btn-group">
								<button class="btn btn-primary active"><i class="icon-th"></i></button>
								<button class="btn"><i class="icon-list"></i></button>
							</div>
						</div><!--end displaytBy-->

					</div><!--end productFilter-->


					<div class="row">
						<ul class="hProductItems clearfix">
							<?php foreach($cari_produk as $p){	?>
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url(); ?>ecom/img/212x192.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											<?php echo $p->nama_produk; ?>
										</a>
									</div>
									<div class="thumbPrice">
										<span>Rp. <?php echo $p->harga_produk; ?></span>
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

					<div class="pagination pagination-right">
						<span class="pull-left">Showing 9 of 20 pages:</span>
						<ul>
							<li><a class="invarseColor" href="#">Prev</a></li>
							<li class="active"><a class="invarseColor" href="#">1</a></li>
							<li><a class="invarseColor" href="#">2</a></li>
							<li><a class="invarseColor" href="#">2</a></li>
							<li><a class="invarseColor" href="#">3</a></li>
							<li><a class="invarseColor" href="#">Next</a></li>
						</ul>
					</div><!--end pagination-->

				</div><!--end span9-->

			</div><!--end row-->

		</div><!--end conatiner-->


		

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

