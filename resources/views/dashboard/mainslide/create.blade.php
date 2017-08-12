@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">

		<div class="panel">
			<div class="panel-heading">
				
				<h3 class="panel-title">New Main Slide</h3>
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
				<form action="{{ route("mainslides.store") }}" method="POST" enctype="multipart/form-data">

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="row">

						<input style="display:none;" id="file-input1" name="photourl1" type='file' onchange="readURL(this);" required/>                    
						<label for="file-input1"><i class="lnr lnr-camera"></i>...Main Slide 1400 x 750<br>
							<img id="blah" src="<?php echo url(); ?>/images/mainslide.png" alt="avatar" alt="your image" />
						</label>
						
						
					</div>

					<div class="form-group">
						<label for="name">Slideno</label>
						<input onkeyup="value=isNaN(parseFloat(value))||value<0||value>10?1:value" name="slideno" type="number" value="1">
					</div>

					<div class="form-group">
						<input type="checkbox" name="active" value="1" checked>Active<br>
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