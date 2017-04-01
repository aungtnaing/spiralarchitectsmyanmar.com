@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">

		<div class="panel">
			<div class="panel-heading">
				
				<h3 class="panel-title">Edit Main Slide</h3>
				@if (count($errors) > 0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif	
			</div>
			<div class="panel-body">
				<form action="{{ route("mainslides.update", $mainslide->id) }}" method="POST" enctype="multipart/form-data">
					<input name="_method" type="hidden" value="PATCH">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="row">
						
						
						<input style="display:none;" id="file-input1" name="photourl1" type='file' onchange="readURL(this);"/>                    
						<label for="file-input1"><i class="lnr lnr-camera"></i>...Main Slide 1400 x 750<br>
							@if($mainslide->photourl1!="")
							<img id="blah" src= "{{ $mainslide->photourl1 }}" width="700" height="375">
							@else
							<img id="blah" src="<?php echo url(); ?>/images/mainslide.png" alt="avatar" alt="your image" />
							@endif
						</label>
						
						
						
						
						
					</div>

					
					<div class="form-group">
						<label for="name">Slideno</label>
						<input onkeyup="value=isNaN(parseFloat(value))||value<0||value>10?1:value" name="slideno" type="number" value="{{ $mainslide->slideno }}">
					</div>
					
					<div class="form-group">
						@if($mainslide->active==0)
						<input type="checkbox" name="active" value="">Active<br>	
						@else		
						<input type="checkbox" name="active" value="" checked>Active<br>
						@endif
					</div>

					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>

		</div>


	</div>
</div>
<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blah')
				.attr('src', e.target.result)
				.width(700)
				.height(375);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

</script>
@stop