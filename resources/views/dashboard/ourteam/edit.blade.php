@extends('dashboard.default')
@section('content')


<div class="main-content">
	<div class="container-fluid">

		<div class="panel">
			

			<div class="panel-heading">
				
				<h3 class="panel-title">Edit Product</h3>
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
				
				
				<form action="{{ route("ourteams.update", $ourteam->id) }}" method="POST" enctype="multipart/form-data">
					<input name="_method" type="hidden" value="PATCH">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					
					
					<div class="row">
						<div class="col-sm-4"><div class="form-group">
							
							<input style="display:none;" id="file-input1" name="photourl" type='file' onchange="readURL(this);"/>                    
							<label for="file-input1">
								<i class="lnr lnr-camera"></i>...Photo 270 x 270<br>
								@if($ourteam->photourl!="")
								<img id="blah" src= "{{ $ourteam->photourl }}" width="100" height="100">
								@else
								<img id="blah" src="//placehold.it/100" alt="avatar" alt="your image" />
								@endif
							</label>
						</div>
					</div>
					
				</div>

				<div class="form-group">
					<label for="name">Name<span class="text-error">*</span></label>
					<input type="text" width: 200px; class="form-control" id="" name="name" placeholder="Enter Name" value="{{ $ourteam->name }}" required>
				</div>
				<div class="form-group">
					<label for="name">Position<span class="text-error">*</span></label>
					<input type="text" class="form-control" id="" name="position" placeholder="Enter position" value="{{ $ourteam->position }}" required>
				</div>
				<div class="form-group">
					<label for="name">Fb link</label>
					<input type="text" class="form-control" id="" name="fburl" placeholder="Enter fb link" value="{{ $ourteam->fburl }}">
				</div>
				<div class="form-group">
					<label for="name">Email<span class="text-error">*</span></label>
					<input type="text" class="form-control" id="" name="email" placeholder="Enter email" value="{{ $ourteam->email }}" required>
				</div>
				<div class="form-group">
					<label for="name">Linkin</label>
					<input type="text" class="form-control" id="" name="linkin" placeholder="Enter linkin" value="{{ $ourteam->linkin }}">
				</div>


				<button type="submit" class="btn btn-default">Submit</button>

			</form>
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
				.width(150)
				.height(150);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}


</script>
@stop