@extends('layouts.master')
@extends('layouts.nav')
@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Teachers Name</th>
					<th scope="col">Advisory Section</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($teachers as $teacher)
					<tr>
						<td>{{ $teacher->id }}</td>
						<td>{{ $teacher->name }}</td>
						<td>{{ $teacher->advisory_section }}</td>
						<td><a href="/home/teachers/{{$teacher->id}}/edit">Edit</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a class="btn btn-primary" href='/home/teachers/add'>Add New Teacher</a>
	</div>
@endsection