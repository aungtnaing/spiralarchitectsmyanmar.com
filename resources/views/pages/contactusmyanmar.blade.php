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

				@include('includes.headermyanmar') 

				<section class="heading-page">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>ဆက္​သြယ္​ရန္</h1>
								<!-- <span>Here are some more info about our company</span> -->
							</div>
						</div>
					</div>
				</section>

				<section class="contact-form">
					<div class="container">

						@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif	
						<div class="row">
							<div class="col-md-12">
								<div class="row">

								<form action="{{ route("contactus.store") }}" method="POST">
										<input type="hidden" name="_token" value="{{ csrf_token() }}">

									<div class="col-md-4 col-sm-12">
										<input type="text" name="name" id="name-id" placeholder="ပထမအမည္" required>
									</div>
									<!-- <div class="col-md-4 col-sm-12">
										<input type="text" name="surname-id" id="surname-id" placeholder="ေနာက္ဆံုးအမည္">
									</div> -->
									<div class="col-md-4 col-sm-12">
										<input type="email" name="email" id="email-id" placeholder="Email လိပ္စာ" required>
									</div>
									<div class="col-md-12 col-sm-12">
										<textarea name="messagecontent" id="message-id" placeholder="သတင္းစကား" required></textarea>
										<!-- <button id="submit-contact" type="button" class="btn">စာပို႔ရန္</button> -->
										<button type="submit" class="btn btn-default">စာပို႔ရန္</button>
									</div>

									</form>
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
									<img src="<?php echo url(); ?>/images/logo_black.png" alt="">
									<p><em>Spiral ဗိသုကာမွ ​</em> ဗိသုကာႏွင္​့သက္​ဆိုင္​​ေသာ လုပ္​ငန္​းမ်ားအား အျပည္​့အဝ ဝန္​​ေဆာင္​မႈ​ေပး​ေနပါသည္​, ၿမိဳ႕ျပစီမံကိန္​း​ေရးဆြဲျခင္​း, အ​ေျခခံအ​ေဆာက္​အဦး အင္​ဂ်င္​နီယာႏွင္​့ ျမန္​မာအ​ေျခစိုက္​ အတြင္​းပိုင္​း ဒီဇိုင္​းကုမၸဏီ ျဖစ္​ပါသည္​. အဆိုပါ ကုမၸဏီကို <em>Mr Rui Barreto</em> မွ ၂၀၀၈ ခုႏွစ္​တြင္​ ဖြဲ႔စည္​းခဲ့ပါသည္​.</p>
									
								</div>
							</div>
							



							<div class="col-md-3">
								<div class="contact-info">	
									<h6>ဆက္သြယ္ရန္အခ်က္အလက္</h6>
									<p>Spiral ဗိသုကာမွ ​ေႏြး​ေထြးစြာ ႀကိဳဆိုပါ၏</p>
									<ul class="contact-list">
										<li><span>ဖုန္​း:</span> + ၉၅ ( ၁ ) ၆၆၁၅၅၆ , ၆၆၀၈၀၉</li>
										<li><span>လိပ္​စာ:</span> ၄၃, ပါရမီလမ္​း​ေထာင္​့ , ျမစပါယ္​လမ္​း , ၈ ရပ္​ကြက္​ , ရန္​ကင္​းၿမိဳ႕နယ္​ , ရန္​ကုန္​ , ျမန္​မာ</li>
										<li><span>Email:</span> <a href="#">spiral.rb@gmail.com</a></li>
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

		@include('includes.sidebarmenumyanmar') 


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


	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCXjxc8STPsTI4t3U6ZfgreQuEq81PNmxg"></script>
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









