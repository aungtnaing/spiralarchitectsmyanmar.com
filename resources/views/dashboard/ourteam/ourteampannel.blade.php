@extends('dashboard.default')
@section('content')
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">

		<div class="panel">
			<div class="panel-heading">
				
				<a class="btn btn-info btn-large pull-right" href="{{ route("ourteams.create") }}">Add New Member</a>
				
				<h3 class="panel-title">Our team</h3>
				
			</div>
			<div class="panel-body">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>#</th>
							
							<th>photo</th>
							<th>Name</th>
							<th>Position</th>
						
							<th>Fb</th>
							<th>Email</th>
							<th>Linkin</th>
							
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($ourteams as $ourteam)
						<tr>   
							<td>{{ $ourteam->id }}</td>
							<td><img src="{{ $ourteam->photourl }}" width="150" height="100"></td>
							<td>{{ $ourteam->name }}</td>
							<td>{{ $ourteam->position }}</td>
							
							<td>{{ $ourteam->fburl }}</td>
							<td>{{ $ourteam->email }}</td>
							<td>{{ $ourteam->linkin }}</td>
							
							<td>
								<a class="btn btn-info" href="{{ route("ourteams.edit", $ourteam->id ) }}">Edit</a>
							</td>
							@if(Auth::user()->roleid==1)
							<td>
								<form method="POST" action="{{ route("ourteams.destroy", $ourteam->id) }}" accept-charset="UTF-8">
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
				{!! $ourteams->render() !!}
		</div>


	</div>
</div>

@stop