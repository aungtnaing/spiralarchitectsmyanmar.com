@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">

		<div class="panel">
			<div class="panel-heading">
				
				<a class="btn btn-info btn-large pull-right" href="{{ route("projects.create") }}">Add New Project</a>
				
				<h3 class="panel-title">Projects</h3>
				
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							<th>Project</th>
							<th>Name</th>
							<!-- <th>mName</th> -->
							<th>Description</th>
							<!-- <th>mDescription</th> -->
							<th>Date</th>
							<th>Location</th>
							<!-- <th>mLocation</th> -->
							<th>Category</th>
							<th>Status</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($projects as $project)
						<tr>   
							<td>{{ $project->id }}</td>
							<td><img src="{{ $project->photourl1 }}" width="200" height="100"></td>
						
							<td>{{ $project->name }}</td>
							<!-- <td>{{ $project->mname }}</td> -->
							<td>{{ $project->description }}</td>
							<!-- <td>{{ $project->mdescription }}</td> -->
							<td>{{ $project->sdate }}</td>
							<td>{{ $project->location }}</td>
							<!-- <td>{{ $project->mlocation }}</td> -->
							<td>{{ $project->category->name }}</td>
							<td>{{ $project->status }}</td>
							<td>
								<a class="btn btn-info" href="{{ route("projects.edit", $project->id ) }}">Edit</a>
							</td>
							@if(Auth::user()->roleid==1)
							<td>
								<form method="POST" action="{{ route("projects.destroy", $project->id) }}" accept-charset="UTF-8">
									<input name="_method" type="hidden" value="DELETE">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input class="btn btn-danger" type="submit" value="Delete">
								</form>
							</td>
							@endif
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			{!! $projects->render() !!}
		</div>


	</div>
</div>

@stop