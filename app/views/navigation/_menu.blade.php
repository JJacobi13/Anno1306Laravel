<div class="navbar">
	<h1 style="text-align: center;" class="nav-header">Actions</h1>
	<ul class="nav navbar-nav">
		@foreach($buildings as $building)
			<li><a class="btn-block buildButton" data-instance-id="{{$building->id}}">Build {{$building->name}}</a></li>
			{{--<button class="buildButton" data-instance-id="{{$building->id}}">Build {{$building->name}}</button>--}}
		@endforeach
		<li><a class="btn-block">Next turn</a></li>
	</ul>
</div>