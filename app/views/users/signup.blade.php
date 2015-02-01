<html>
	<head>
		<title>Anno 1306</title>
		@include('layouts.defaults.cssIncludes')
		<link rel="stylesheet" type="text/css" href="/css/login.css">

		@include('layouts.defaults.javascriptIncludes')
		<script src="/js/jquery/login.js"></script>
	</head>
	<body>
	<div class="sign-in col-md-3 center-block img-rounded">
		<div class="row">
			<div class="page-header text-center">
				<h1 class="text-capitalize">Create new user</h1>
			</div>

			<div class="row text-center">
				{{Form::open(['url' => '/users', 'method'=>'POST'])}}
					@if($errors->any())
						<div class="has-error col-md-10 col-md-offset-1">
							<div class="control-label">
								{{$errors->first()}}
							</div>
						</div>
					@endif
					<div class="form-group">
						<span class="glyphicon glyphicon-user">
						{{Form::text('username', null, ['placeholder' => 'Username', 'autofocus'=>'autofocus'])}}
						</span>
					</div>
					<div class="col-md-12">
						{{Form::submit('Create', ['class' => 'btn btn-primary pull-right login-button'])}}
					</div>
				{{Form::close()}}
			</div>
			<div class="modal-footer col-md-12">
				<div class="col-md-6 col-md-offset-3">
	                <p>Already have an account?</p>
	                {{link_to('/login', 'Login', ['class' => 'btn btn-default'])}}
				</div>
            </div>
		</div>
	</div>
	</body>
</html>