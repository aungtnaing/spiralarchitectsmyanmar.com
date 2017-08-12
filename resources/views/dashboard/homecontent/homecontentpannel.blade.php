@extends('dashboard.default')
@section('content')
<div class="main-content">
	<div class="container-fluid">

		<div class="panel">
			<div class="panel-heading">
				
				<h3 class="panel-title">home content</h3>
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
				<form action="{{ route("homecontents.update", $homecontent->id) }}" method="POST" enctype="multipart/form-data">
					<input name="_method" type="hidden" value="PATCH">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group">
						<label for="name">Content</label>
						<textarea name="content" placeholder="Enter your content" class="form-control" rows="5">{{ $homecontent->content }}</textarea>
					</div>
					<div class="form-group">
						<label for="name">mContent</label>
						<textarea name="mcontent" placeholder="Enter your mcontent" class="form-control" rows="5">{{ $homecontent->mcontent }}</textarea>
					</div>


					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>

		</div>


	</div>
</div>


@stop
