@extends('layouts.default')
@section('content')
	<!-- <section class="heading-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Project Details</h1>
					<span>Here are some more info about our company</span>
				</div>
			</div>
		</div>
	</section> -->


		<section class="project-page">
					<div class="container">	
						<div class="row">
							<div class="col-md-9">
								<div class="slider">
									<div class="single-slider">
										<ul class="slides">
										    <li data-thumb="{{ $project->photourl1 }}">
										      <img src="{{ $project->photourl1 }}" alt="" />
										    </li>
										   <li data-thumb="{{ $project->photourl2 }}">
										      <img src="{{ $project->photourl2 }}" alt="" />
										    </li>
										   <li data-thumb="{{ $project->photourl3 }}">
										      <img src="{{ $project->photourl3 }}" alt="" />
										    </li>
										    <li data-thumb="{{ $project->photourl4 }}">
										      <img src="{{ $project->photourl4 }}" alt="" />
										    </li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="project-info">
									<h4>{{ $project->name }}</h4>
									<p>{{ substr($project->description,0, 50) }}..</p>
									<ul class="list-info">
										<!-- <li><i class="fa fa-user"></i><span>Client: </span>Ider Natas</li> -->
										<li><i class="fa fa-calendar"></i><span>Date: </span>{{ $project->sdate }}</li>
										<!-- <li><i class="fa fa-dollar"></i><span>Budget: </span>$45.000</li> -->
										<li><i class="fa fa-map-marker"></i><span>Location: </span>{{ $project->location }}</li>
										<li><i class="fa fa-folder"></i><span>Category: </span>{{ $project->category->name }}</li>
										<li><i class="fa fa-share-alt"></i><span>Share on: </span><a href="https://www.facebook.com/RobertImeri19">Facebook</a> ,<a href="#">Twitter</a> ,<a href="#">Linkedin</a> ,</li>
									</ul>
								</div>
								<div class="pagination-buttons">
									<div class="black-button first-button">
										<a href="{{ url('/projectdetailprev', $project->id) }}">Prev Project</a>
									</div>
									<div class="black-button second-button">
										<a href="{{ url('/projectdetailnext', $project->id) }}">Next Project</a>
									</div>
								</div>	
							</div>
						</div>
						<div class="row">
							<div class="more-project-info">
								<!-- <div class="col-md-6">
									<div class="project-goal">
										<h6>Project Goal:</h6>
										<p>Umami crucifix lo-fi 3 wolf moon, skateboard vice photo booth small batch truffaut typewriter. Four loko polaroid blog, tofu forage next level tumblr organic literally meggings. Mumblecore direct trade kogi, 3 wolf moon artisan disrupt four dollar toast. Semiotics artisan skateboard crucifix. Selvage synth cray pork belly tousled.</p>
										<ul class="goal-info">
											<li><i class="fa fa-lightbulb-o"></i><h4>Idea</h4></li>
											<li><i class="fa fa-pencil"></i><h4>Scatch</h4></li>
											<li><i class="fa fa-child"></i><h4>Realization</h4></li>
										</ul>
									</div>
								</div> -->
								<div class="col-md-6">
									<div class="project-description">
										<h6>Project Description:</h6>
										<p>{{ $project->description }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>



@stop
