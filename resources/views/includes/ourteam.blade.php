	<section class="our-team">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="section-heading-left text-left">
									<img src="<?php echo url(); ?>/images/icon_big.png" alt="">
									<h2>Our <em>Team</em></h2>
									<p>Here are some <span>members</span> of our team.</p>
								</div>
							</div>
						</div>
						<div class="row">
							@foreach($ourteams as $ourteam)
							<div class="col-md-2">
								<div class="member-item">
							  		<figure>
			        					<a href="#"><img alt="team-member" src="{{ $ourteam->photourl }}"></a>
			        					<figcaption>
			        						<ul>
			        							<li><a href="{{ $ourteam->fburl }}"><i class="fa fa-facebook"></i></a></li>
			        							<li><a href="{{ $ourteam->email }}"><i class="fa fa-envelope-o"></i></a></li>
			        							<li><a href="{{ $ourteam->linkin }}"><i class="fa fa-linkedin"></i></a></li>
			        						</ul>
			        					</figcaption>
			    					</figure>		
			    					<div class="down-content">
		        						<h3>{{ $ourteam->name }}</h3>
		        						<span>{{ $ourteam->position }}</span>
		        					</div>						    
								</div>
							</div>
							@endforeach
							
						</div>
					</div>
				</section>