@extends('layouts.default')
@section('content')
<style>
img {
    display: block;
    margin: 0 auto;
}
</style>
<section class="project-page">
	
		<div class="row">
			   <div class="col-sm-8" style="background-color:lightcyan;">
			   	<img height="2000" width="1500" src="<?php echo url(); ?>{{ $project->photourl1 }}" alt="" />
			   </div>

			   @if($project->photourl2!="")
        		<div class="col-sm-8" style="background-color:lightgray;">
        		<img height="2000" width="1500" src="<?php echo url(); ?>{{ $project->photourl2 }}" alt="" /></div>
        		@endif
		</div>
	


</section>



@stop
