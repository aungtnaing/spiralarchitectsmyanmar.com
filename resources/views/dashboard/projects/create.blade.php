@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">

		<div class="panel">
			<div class="panel-heading">
				
				<h3 class="panel-title">New Product</h3>
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
				<form action="{{ route("projects.store") }}" method="POST" enctype="multipart/form-data">

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="row">
						<div class="col-sm-3"><div class="form-group">
							
							<input style="display:none;" id="file-input1" name="photourl1" type='file' onchange="readURL(this);" required/>                    
							<label for="file-input1">
								<i class="lnr lnr-camera"></i>...Main 870 x 600<br>
								<img id="blah" src="//placehold.it/100" alt="avatar" alt="your image" />
							</label>
						</div>
					</div>
					<div class="col-sm-3"><div class="form-group">
						<input style="display:none;" id="file-input2" name="photourl2" type='file' onchange="readURL2(this);" />                    
						<label for="file-input2">
							<i class="lnr lnr-camera"></i>...Details 870 x 600<br>
							<img id="blah2" src="//placehold.it/100" alt="avatar" alt="your image" />
						</label>
					</div></div>
					<div class="col-sm-3"><div class="form-group">
						<input style="display:none;" id="file-input3" name="photourl3" type='file' onchange="readURL3(this);" />                    
						<label for="file-input3">
							<i class="lnr lnr-camera"></i>...Details 870 x 600<br>
							<img id="blah3" src="//placehold.it/100" alt="avatar" alt="your image" />
						</label>
					</div></div>
					<div class="col-sm-3"><div class="form-group">
						<input style="display:none;" id="file-input4" name="photourl4" type='file' onchange="readURL4(this);" />                    
						<label for="file-input4">
							<i class="lnr lnr-camera"></i>...Details 870 x 600<br>
							<img id="blah4" src="//placehold.it/100" alt="avatar" alt="your image" />
						</label>
					</div></div>
				</div>

						<div class="row">
						<div class="col-sm-3"><div class="form-group">
							
							<input style="display:none;" id="file-inputsmall1" name="photourlsmall1" type='file' onchange="readURLsmall(this);" required/>                    
							<label for="file-inputsmall1">
								<i class="lnr lnr-camera"></i>...Main 120 x 80<br>
								<img id="blahsmall" src="//placehold.it/100" alt="avatar" alt="your image" />
							</label>
						</div>
					</div>
					<div class="col-sm-3"><div class="form-group">

						<input style="display:none;" id="file-inputsmall2" name="photourlsmall2" type='file' onchange="readURLsmall2(this);" />                    
						<label for="file-inputsmall2">
							<i class="lnr lnr-camera"></i>...Details 120 x 80<br>
							<img id="blahsmall2" src="//placehold.it/100" alt="avatar" alt="your image" />
						</label>
					</div></div>
					<div class="col-sm-3"><div class="form-group">
						<input style="display:none;" id="file-inputsmall3" name="photourlsmall3" type='file' onchange="readURLsmall3(this);" />                    
						<label for="file-inputsmall3">
							<i class="lnr lnr-camera"></i>...Details 120 x 80<br>
							<img id="blahsmall3" src="//placehold.it/100" alt="avatar" alt="your image" />
						</label>
					</div></div>
					<div class="col-sm-3"><div class="form-group">
						<input style="display:none;" id="file-inputsmall4" name="photourlsmall4" type='file' onchange="readURLsmall4(this);" />                    
						<label for="file-inputsmall4">
							<i class="lnr lnr-camera"></i>...Details 120 x 80<br>
							<img id="blahsmall4" src="//placehold.it/100" alt="avatar" alt="your image" />
						</label>
					</div></div>
				</div>

				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">

							<label for="name">Name<span class="text-error">*</span></label>
							<input type="text" width: 200px; class="form-control" id="" name="name" placeholder="Enter Name" value="{{ old('name') }}" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="name">mName<span class="text-error">*</span></label>
							<input type="text" class="form-control" id="" name="mname" placeholder="Enter mName" value="{{ old('mname') }}" required>
						</div>
					</div>
					
				</div>

				<div class="row">
					
					<div class="col-sm-6">
							<div class="form-group">
								<label for="name">Description:</label>
								<textarea name="description" placeholder="Enter your description" class="form-control" rows="3"></textarea>
							</div>
					</div>

					<div class="col-sm-6">
							<div class="form-group">
								<label for="name">mDescription:</label>
								<textarea name="mdescription" placeholder="Enter your mdescription" class="form-control" rows="3"></textarea>
							</div>
					</div>

				</div>
				<div class="row">
                	<div class='col-sm-3'>
			            <div class="form-group">
			                
			                	<label for="name"><i class="fa fa-calendar"></i>..Date:</label>
			                    <input type="date" placeholder="mm / dd / yyyy" name="sdate" class="form-control" />
			                    
			                    </span>
			                
			            </div>
		        	</div>
                
                </div>

           		<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="name">Location<span class="text-error">*</span></label>
							<input type="text" width: 200px; class="form-control" id="" name="location" placeholder="Enter location" value="{{ old('location') }}" required>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="name">mLocation<span class="text-error">*</span></label>
							<input type="text" class="form-control" id="" name="mlocation" placeholder="Enter mlocation" value="{{ old('mlocation') }}" required>
						</div>
					</div>
					
				</div>
				
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="name">Category</label>
							<br>
							<select name="category">
								@foreach($categorys as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
								@endforeach	
							</select>

						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
							<label for="name">Status</label>
							<br>
							<select name="status">
								<option value="developing">developing</option>
								<option value="finished">finished</option>
							</select>

						</div>
					</div>
				</div>

				<div class="row">
					
					<div class="col-sm-6">
							<div class="form-group">
								<label for="name">Goal:</label>
								<textarea name="projectgoals" placeholder="Enter your goals" class="form-control" rows="3"></textarea>
							</div>
					</div>

					<div class="col-sm-6">
							<div class="form-group">
								<label for="name">mGoal:</label>
								<textarea name="mprojectgoals" placeholder="Enter your mgoals" class="form-control" rows="3"></textarea>
							</div>
					</div>

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
				.width(150)
				.height(100);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

	function readURL2(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blah2')
				.attr('src', e.target.result)
				.width(150)
				.height(100);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

	function readURL3(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blah3')
				.attr('src', e.target.result)
				.width(150)
				.height(100);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

		function readURL4(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blah4')
				.attr('src', e.target.result)
				.width(150)
				.height(100);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

		function readURLsmall(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blahsmall')
				.attr('src', e.target.result)
				.width(150)
				.height(100);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

	function readURLsmall2(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blahsmall2')
				.attr('src', e.target.result)
				.width(150)
				.height(100);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

	function readURLsmall3(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blahsmall3')
				.attr('src', e.target.result)
				.width(150)
				.height(100);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}

		function readURLsmall4(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$('#blahsmall4')
				.attr('src', e.target.result)
				.width(150)
				.height(100);
			};

			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
@stop