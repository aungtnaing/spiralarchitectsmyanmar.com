<!doctype html>
<html>
<head>
	@include('includes.head')
	<style>


@font-face {
font-family:'Myanmar3';
src:local('Myanmar3'), url('../fonts/myanmar3/myanmar3.woff') format('woff'), url('../fonts/myanmar3/myanmar3.ttf') format('ttf');
}

@font-face {
font-family:'Zawgyi-One';
src:local('Zawgyi-One'), url('../fonts/zawgyi/zawgyi.woff') format('woff'), url('../fonts/zawgyi/zawgyi.ttf') format('ttf');
}

@font-face {
font-family:'Oregon_LDO_Book';
src:local('Oregon_LDO_Book'), url('../fonts/Oregon_LDO_Book/Oregon_LDO_Book.woff') format('woff'), url('../fonts/Oregon_LDO_Book/Oregon_LDO_Book.ttf') format('ttf');
}
/* start of zawgyi font */

.zawgyi{
font-family: Zawgyi-One, serif;
}

.zawgyi::-webkit-input-placeholder {
font-family: Zawgyi-One, serif;
}

.zawgyi:-ms-input-placeholder {
font-family: Zawgyi-One, serif;
}

.zawgyi:-moz-placeholder {
font-family: Zawgyi-One, serif;
}

.zawgyi::-moz-placeholder {
font-family: Zawgyi-One, serif;
}

/* end of zawgyi font */

/* start of myanmar 3 font */

.myanmar3{
font-family: "Masterpiece Uni Sans", Myanmar3, serif;
}

.myanmar3::-webkit-input-placeholder {
font-family: "Masterpiece Uni Sans", Myanmar3, serif;
}

.myanmar3:-ms-input-placeholder {
font-family: "Masterpiece Uni Sans", Myanmar3, serif;
}

.myanmar3:-moz-placeholder {
font-family: "Masterpiece Uni Sans", Myanmar3, serif;
}

.myanmar3::-moz-placeholder {
font-family: "Masterpiece Uni Sans", Myanmar3, serif;
}

	</style>
</head>
<body>


	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				@include('includes.headermyanmar')

				@yield('content')

				@include('includes.footermyanmar')

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
					address: '16.9143488,96.1526985'

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

    <!-- <script type="text/javascript">
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
    </script> -->

</body>
</html>
