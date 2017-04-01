<nav class="sidebar-menu slide-from-left">
	<div class="nano">
		<div class="content">
			<nav class="responsive-menu">
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="<?php echo url(); ?>/aboutus">About Us</a></li>
					<li class="menu-item-has-children"><a href="#">Selected Works</a>
						<ul class="sub-menu">
							@foreach($categorys as $category)
										@if(count($category->projects)>0)
											<li class="menu-item-has-children"><a href="#">{{ $category->name }}<span class="caret"></span></a>
											@foreach($category->projects as $project)
													<ul class="sub-menu">
														<li><a href="{{ url('/projectdetail', $project->id) }}">{{ $project->name }}</a></li>
													</ul>
											@endforeach
											</li>
										@else
											<li><a href="#">{{ $category->name }}</a></li>
										@endif
									@endforeach
							
						</ul>
					</li>
					<li><a href="<?php echo url(); ?>/services">Services</a></li>
					
					<li><a href="<?php echo url(); ?>/contactus">Contact</a></li>

					<li class="menu-item-has-children navbutton-english"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English</a>
						<ul class="sub-menu">
							<li class="navbutton-myanmar"><a href="<?php echo url(); ?>/mn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ျမန္မာ</a></li>
							<li class="navbutton-english"><a href="<?php echo url(); ?>/en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English</a></li>
						
						</ul>
					</li>
				</ul>
			</nav>
			<div class="company-info">
				<img src="<?php echo url(); ?>/images/logo_black.png" alt="">
				<div class="line-dec"></div>
				<p>spiral architects</p>
				<ul class="contact-list">
					<li><span>Phone:</span> +95 (1) 661556</li>
						<li><span>Address:</span> 43, Corner of Parami Road & Mya Sabi Street 8 Ward, Yankin Township, Yangon, Myanmar</li>
						<li><span>Email:</span> <a href="#">spiral.rb@gmail.com</a></li>
				</ul>
				<!-- <ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-behance"></i></a></li>
				</ul> -->
			</div>
		</div>
	</div>
</nav>