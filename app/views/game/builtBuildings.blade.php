<ul id="buildingList">
	@foreach(Auth::user()->buildings()->lists('name') as $buildingName)
		<li>{{$buildingName}}</li>
	@endforeach
</ul>
