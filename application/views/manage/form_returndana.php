<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<!-- Mirrored from ahmedsaeed.me/shopfine/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:24 GMT -->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>ShopFine: Checkout</title>
	<meta name="description" content="">
	<meta name="author" content="Ahmed Saeed">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/bootstrap.min.css" media="screen">
	<!-- jquery ui css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/jquery-ui-1.10.1.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/customize.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/style.css">
	<!-- flexslider css-->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/flexslider.css">
	<!-- fancybox -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/js/fancybox/jquery.fancybox.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<link rel="stylesheet" href="<?php echo base_url(); ?>ecom/css/font-awesome-ie7.css">
	<![endif]-->
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>ecom/images/favicon.html">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>ecom/images/apple-touch-icon.html">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>ecom/images/apple-touch-icon-72x72.html">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>ecom/images/apple-touch-icon-114x114.html">
</head>

<body>

	<div id="mainContainer" class="clearfix">

		<div class="container">

			<div class="row">
				<div class="span12">
					<?php if($this->session->userdata('is_logged_in') == false) {
					echo
					"<div class='checkout-outer'>
						<div class='checkout-header'>
							<a href='#'' class='invarseColor pull-right' data-toggle='tooltip' data-placment='top' data-title='EDIT' style='margin-right:12px; color:#333; font-size:13px;'><i class='icon-pencil'></i></a>
							<h4><i class='icon-caret-down'></i> Checkout Options</h4>
						</div><!--end checkout-header-->

						<div class='checkout-content'>
							<div class='login'>
								<table>
									<tr>
										<td>
											<h3>New Customer</h3>
											<form method='post' action=''>
												<label class='radio'>
												  <input type='radio' name='optionsRadios' value='1' checked>
												  Registeration Account.
												</label>
												<label class='radio'>
												  <input type='radio' name='optionsRadios' value='0'>
												  Contuine as guest account.
												</label>
											</form><!--end form-->
											<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
											<a href='".base_url()."regis' class='btn'>Register</a>
										</td>

										<td>
											<h3>Login</h3>
											<form method='post' action='login'>
												<div class='controls'>
													<label>Masukkan Username: <span class='text-error'>*</span></label>
													<input type='text' name=''value='' placeholder='budi'>
												</div>
												<div class='controls'>
													<label>Masukkan Password: <span class='text-error'>*</span></label>
													<input type='password' name='' value='' placeholder='**************'>
												</div>
												<div class='controls'>
													<label class='checkbox'>
												      <input type='checkbox'> Check me out
												    </label>
												    <button type='submit' class='btn btn-primary'>Login</button>
												</div>
											</form><!--end form-->
										</td>
									</tr>
								</table>
							</div><!--end login-->
						</div><!--end checkout-content-->
					</div><!--end checkout-outer-->";

					}?>

					<div class="checkout-outer">
						<div class="checkout-header">
							<a href="#" class="invarseColor pull-right" data-toggle="tooltip" data-placment="top" data-title="EDIT" style="margin-right:12px; color:#333; font-size:13px;"><i class="icon-pencil"></i></a>
							<h4><i class="icon-caret-down"></i> Informasi Order</h4>
						</div><!--end checkout-header-->

						<div class="checkout-content">
							
							<hr>

							<form method="post" action="<?php echo base_url();?>manage/return_dana/insert" class="form-horizontal">

								<div class="control-group">
								    <label class="control-label" for="inputFirstName">Nomor Oder: <span class="text-error">*</span></label>
								    <div class="controls">
								      <input type="text" id="inputNoOrder" name="no_order" placeholder="isikan nomor order">
								    </div>
								</div><!--end control-group-->
								
							<!-- </form>end form -->
						</div><!--end checkout-content-->
					</div><!--end checkout-outer-->


					<div class="checkout-outer">
						<div class="checkout-header">
							<a href="#" class="invarseColor pull-right" data-toggle="tooltip" data-placment="top" data-title="EDIT" style="margin-right:12px; color:#333; font-size:13px;"><i class="icon-pencil"></i></a>
							<h4><i class="icon-caret-down"></i> Informasi Pengembalian Dana</h4>
						</div><!--end checkout-header-->

						<div class="checkout-content">
							
							<hr>

							<!-- <form method="post" action="<?php echo base_url();?>manage/return_dana/insert" class="form-horizontal"> -->

								
								<div class="control-group">
								    <div class="control-label">Nama Bank: <span class="text-error">*</span></div>
								    <div class="controls">
								      <select name="bank">
								      	<option value="#">-- Pilih Bank --</option>
								      	<option value="Bank Mandiri">Bank Mandiri</option>
										<option value="Bank Central Asia">Bank Central Asia</option>
										<option value="Bank Negara Indonesia">Bank Negara Indonesia</option>
										<option value="Bank Rakyat Indonesia">Bank Rakyat Indonesia</option>
								      </select>
								    </div>
								</div>

								<div class="control-group">
								    <label class="control-label" for="inputFirstName">Nama Lengkap Pemilik Rekening: <span class="text-error">*</span></label>
								    <div class="controls">
								      <input type="text" id="inputName" name="nama_pemilik" placeholder="Nama Lengkap Pemilik Rekening">
								      <!--<span class="help-inline"><i class="icon-ok"></i> Avaliable input!</span>-->
								    </div>
								</div><!--end control-group-->

								<div class="control-group">
								    <label class="control-label" for="inputCompany">Nomor Rekening: <span class="text-error">*</span></label>
								    <div class="controls">
								      <input type="text" id="inputCompany" name="no_rekening" placeholder="Nomor Rekening:">
								    </div>

								    <div class="control-group" align="center">
							    <div class="controls">
								    <input type="submit" name="submit" class="btn btn-primary" value="Request">
							    </div>

								</div><!--end control-group-->

								</div><!--end control-group-->


							</form><!--end form-->
						</div><!--end checkout-content-->
					</div><!--end checkout-outer-->


</form>
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


<!-- Mirrored from ahmedsaeed.me/shopfine/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Apr 2016 16:02:24 GMT -->
</html>