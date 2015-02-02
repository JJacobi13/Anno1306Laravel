<div class="navbar">
	<h1 style="text-align: center;" class="nav-header">Actions</h1>
	<ul class="nav navbar-nav">
		@foreach($buildings as $building)
			<li>{{$building->presenter()->getBuildButton()}}</li>
		@endforeach
		<li><a class="btn-block next-turn-button">Next turn</a></li>
	</ul>
</div>