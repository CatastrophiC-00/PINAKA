@extends('layouts.master')
@section('content')
	<div class="container">
		@include('layouts.errors')
		<form method="POST" action="/home/subjects/store">
			@csrf
		  <div class="form-group">
		    <label for="Subject Name">Subject Name</label>
		    <input type="text" class="form-control" name="name" placeholder="Subject Name">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection