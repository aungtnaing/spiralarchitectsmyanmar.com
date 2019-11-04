<nav class="sidebar-menu slide-from-left">
	<div class="nano">
		<div class="content">
			<nav class="responsive-menu">
				<ul>
					<li><a href="/myanmar">ပင္မစာမ်က္ႏွာ</a></li>
					<li><a href="<?php echo url(); ?>/aboutusmyanmar">spiral အ​ေၾကာင္​း</a></li>
					<li class="menu-item-has-children"><a href="#">SELECTED အလုပ္မ်ား</a>
						<ul class="sub-menu">
							@foreach($categorys as $category)
										@if(count($category->projects)>0)
											<li class="menu-item-has-children"><a href="#">{{ $category->mname }}</a>
											@foreach($category->projects as $project)
													<ul class="sub-menu">
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
					<li class="menu-item-has-children navbutton-myanmar"><a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ျမန္မာ</a>
						<ul class="sub-menu">
							<li class="navbutton-english"><a href="<?php echo url(); ?>/en">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English</a></li>
							<li class="navbutton-myanmar"><a href="<?php echo url(); ?>/mn">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ျမန္မာ</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<div class="company-info">
				<img src="<?php echo url(); ?>/images/logo_black.png" alt="">
				<div class="line-dec"></div>
				<p>spiral architects</p>
				<ul class="contact-list">
					<li><span>ဖုန္​း:</span>  +95 (9) 50.12.477</li>
						<li class="myanmar3" style="font-family: "Masterpiece Uni Sans", Myanmar3, serif;"><span>လိပ်​စာ: </span>အမှတ် ( ၂၅ / E ) သီရိမင်္ဂလာရိပ်သာလမ်းသွယ် ကမ္ဘာအေး ဘုရားလမ်း ရန်ကင်းမြို့နယ် ရန်ကုန်မြို့</li>
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
