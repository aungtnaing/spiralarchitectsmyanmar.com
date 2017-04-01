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

				@yield('content')

				@include('includes.footer') 

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


  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCXjxc8STPsTI4t3U6ZfgreQuEq81PNmxg"></script>
    <script src="<?php echo url(); ?>/js/jquery.gmap3.min.js"></script>
    
    <!-- Google Map Init-->
    <script type="text/javascript">
        jQuery(function($){
            $('.contact-map').gmap3({
                marker:{
                    address: '16.8506586,96.1603833' 
                    
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
