
@extends('master')

@section('title')
	
	Login | API
	
@endsection

@section('content')

<div class="row">
	<div class="col-sm-5">
		<h1 align="center" class="heading"> User Login</h1>
		@if(count($errors) > 0)

			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach	
				</ul>
			</div>
		@endif
		@if(\Session::has('success'))
			<div class="alert alert-success">
				<p>{{ \Session::get('success') }}</p>
			</div>
		@endif	
		<form action="{{url('user')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label for="name">User Name</label>
				<input class="form-control" type="text" name="name" id="name" value="" placeholder="User Name" autocomplete="off" >
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="email" name="email" id="email" value="" placeholder="User Email" autocomplete="off">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input class="form-control" type="password" name="password" id="password" value="" placeholder="User Password" autocomplete="off" >
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary"/>
			</div>

			<!-- <button class="btn btn-primary" type="button" name="submit" id="submit" value="">Submit</button> -->
		</form>				

	</div>
</div>


@endsection