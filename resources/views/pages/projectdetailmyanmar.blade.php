@extends('layouts.defaultmyanmar')
@section('content')
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
									<h4>{{ $project->mname }}</h4>
									<!-- <p>{{ substr($project->mdescription,0, 50) }}..</p> -->
									<p>{{ mb_substr($project->mdescription,0,100, "utf-8") }}..</p>
									<ul class="list-info">
										<!-- <li><i class="fa fa-user"></i><span>Client: </span>Ider Natas</li> -->
										<li><i class="fa fa-ca$project->mdescriptionlendar"></i><span>​ေန႔စြဲ: </span>{{ $project->sdate }}</li>
										<!-- <li><i class="fa fa-dollar"></i><span>Budget: </span>$45.000</li> -->
										<li><i class="fa fa-map-marker"></i><span>တည္​​ေနရာ: </span>{{ $project->mlocation }}</li>
										<li><i class="fa fa-folder"></i><span>အမ်ိဳးအစား: </span>{{ $project->category->mname }}</li>
										<li><i class="fa fa-share-alt"></i><span>Share on: </span><a href="https://www.facebook.com/RobertImeri19">Facebook</a> ,<a href="#">Twitter</a> ,<a href="#">Linkedin</a> ,</li>
									</ul>
								</div>
								<div class="pagination-buttons">
									<div class="black-button first-button">
										<a href="{{ url('/projectdetailprevmyanmar', $project->id) }}">​ေ႐ွ႕သို႔ (စီမံကိန္​း)</a>
									</div>
									<div class="black-button second-button">
										<a href="{{ url('/projectdetailnextmyanmar', $project->id) }}">​ေနာက္​သို႔ (စီမံကိန္​း)</a>
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
										<h6>စီမံကိန္​း​ေဖာ္​ျပခ်က္​:</h6>
										<p>{{ $project->mdescription }}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>



@stop
