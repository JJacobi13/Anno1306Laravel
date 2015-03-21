<html ng-app>
	<head>
		<title>Anno 1306</title>
		@include('layouts.defaults.cssIncludes')
		@include('layouts.defaults.javascriptIncludes')
	</head>
	<body>
		<div class="container img-rounded main-container">
			<div class="col-md-12 bg-info text-center row-md-half md-outline md-padding">
                @include('game._stats')
            </div>

			<div class="col-md-2 bg-primary row-md-8-half md-outline no-margin">
				@include('navigation._menu')
			</div>

			<div class="col-md-10 no-margin row-md-8-half">
				<div id="mainContent" class="col-md-9 row-md-12">
					<div id="built-buildings">
						@include('game.builtBuildings')
					</div>
				</div>

				<div class="col-md-3 bg-info row-md-12 md-outline">
					@yield('content')
                </div>
			</div>

			<div id='logging' class="col-md-12 bg-warning row-md-3 md-outline" style="height: 200px;">


			</div>

		</div>

		@include('game._lost')
	</body>
</html>