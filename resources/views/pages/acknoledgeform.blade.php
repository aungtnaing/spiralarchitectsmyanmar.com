<!doctype html>
<html>
<head>
	@include('includes.head')  
</head>
<body>

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				@include('includes.header') 

				<section class="heading-page">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Contact Us : Thanks you.!</h1>
								<!-- <span>Here are some more info about our company</span> -->
							</div>
						</div>
					</div>
				</section>

				<section class="contact-form">
					<div class="container">


						<div class="row">
							<div class="col-md-12">
								<div class="row">

									<p>Have a nice day.!</p>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="map-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="content-map">
									<div class="contact-map" style="height: 420px;"></div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<footer>
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<div class="about-us">
									<img src="images/logo_black.png" alt="">
									<p>Spiral Architects is a full serviced architectural, urban planning, structural engineering and interior design firm based in Myanmar. The company was established in 2008 by Mr. Rui Barreto.</p>
					<!-- <ul class="social-icons">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-behance"></i></a></li>
					</ul> -->
				</div>
			</div>
			



				<div class="col-md-3">
					<div class="contact-info">	
						<h6>Contact Info</h6>
						<p>Friendly welcome our spiral architects.</p>
						<ul class="contact-list">
							<li><span>Phone:</span> +95 (1) 661556, 660809</li>
							<li><span>Address:</span> 43, Corner of Parami Road & Mya Sabi Street 8 Ward, Yankin Township, Yangon, Myanmar</li>
							<li><span>Email:</span> <a href="#">spiral.rb@gmail.com</a></li>
							<!-- <li><span>Website:</span> <a href="#">www.yourwebsite.com</a></li> -->
						</ul>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">	
					<div class="copyright-text">
						<p>@ 2017 Info-Link IT Solution. All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>



	<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

</div>

</div>

@include('includes.sidebarmenu') 


</div>


<script type="text/javascript" src="<?php echo url(); ?>/js/jquery.smartmenus.js"></script>
<script type="text/javascript" src="<?php echo url(); ?>/js/jquery.smartmenus.bootstrap.js"></script>

<script type="text/javascript" src="<?php echo url(); ?>/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo url(); ?>/js/bootstrap.min.js"></script>
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script src="<?php echo url(); ?>/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo url(); ?>/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="<?php echo url(); ?>/js/plugins.js"></script>
<script type="text/javascript" src="<?php echo url(); ?>/js/custom.js"></script>


<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="<?php echo url(); ?>/js/jquery.gmap3.min.js"></script>

<!-- Google Map Init-->
<script type="text/javascript">
	jQuery(function($){
		$('.contact-map').gmap3({
			marker:{
				address: '16.8511883,96.1629178' 

			},
			map:{
				options:{
					zoom: 15,
					scrollwheel: true,
					streetViewControl : true
				}
			}
		});
	});
</script>

</body>
</html>









