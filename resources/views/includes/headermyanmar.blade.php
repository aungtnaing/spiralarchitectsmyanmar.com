	<header class="site-header">
		<div id="main-header" class="main-header header-sticky">
			<div class="inner-header container clearfix">
				<div class="logo">
					<a href="/"></a>
				</div>
				<!-- <div><img src="images//home/kyaw/Desktop/17439700_10155277754424474_2065623912_n.png"></div> -->
				<br>
				
					<div class="header-right-toggle pull-right">
						<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
					</div>
				<div class="navbar text-right hidden-xs hidden-sm">
					

					<div class="navbar-collapse collapse">
						<!-- Right nav -->
						<ul class="nav navbar-nav navbar-right">
							<li><a href="/myanmar">ပင္မစာမ်က္ႏွာ</a></li>
							<li><a href="<?php echo url(); ?>/aboutusmyanmar">spiral အ​ေၾကာင္​း</a></li>
							<li><a href="">SELECTED အလုပ္မ်ား<span class="caret"></span></a>
								<ul class="dropdown-menu">
									@foreach($categorys as $category)
										@if(count($category->projects)>0)
											<li><a href="#">{{ $category->mname }}<span class="caret"></span></a>
											@foreach($category->projects as $project)
													<ul class="dropdown-menu">
														<li><a href="{{ url('/projectdetailmyanmar', $project->id) }}">{{ $project->mname }}</a></li>
													</ul>
											@endforeach
											</li>
										@else
											<li><a href="#">{{ $category->mname }}</a></li>
										@endif
									@endforeach
									
								</ul>
							</li>
							<li><a href="<?php echo url(); ?>/servicesmyanmar"> ဝန္​​ေဆာင္​မႈ​မ်ား</a></li>
							<li><a href="<?php echo url(); ?>/contactusmyanmar">ဆက္​သြယ္​ရန္</a></li>
							<li class="navbutton-myanmar"><a href="">ျမန္မာ<span class="caret"></a>
									<ul class="dropdown-menu">
										<li class="navbutton-english"><a href="<?php echo url(); ?>/">&nbsp;&nbsp;English</a></li>
										<li class="navbutton-myanmar"><a href="<?php echo url(); ?>/myanmar">&nbsp;&nbsp;ျမန္မာ</a></li>
										
									</ul>
							</li>
							<!-- <li class="side-menu-button"><a href="javascript:void(0)"><i class="fa fa-bars"></i></a></li> -->
						</ul>

					</div><!--/.nav-collapse -->

				</div>

			</div>
		</div>
	</header>

	<script type="text/javascript">

		$(document).ready(function(){       
			var scroll_start = 0;

			$(document).scroll(function() { 
				scroll_start = $(this).scrollTop();
				if(scroll_start > 0) {
					$(".navbar .nav > li > a").css('color', 'black');
				}
				else
				{
					$(".navbar .nav > li > a").css('color', '#ddd');
				}
			});

		});


	</script>
