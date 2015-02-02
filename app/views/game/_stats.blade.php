<a class="pull-left btn btn-xs btn-info" href="/users/restart">Restart game</a>
@foreach(Auth::user()->getAllResources() as $resourceQuantity)
	<span>{{$resourceQuantity->name}}: <span class="text-info" id="show_{{$resourceQuantity->name}}">{{$resourceQuantity->quantity}}</span></span>
@endforeach
<a class="pull-right btn btn-xs btn-info" href="/logout">Logout</a>
<span class="pull-right" style="margin-right: 40px;" >User: <strong>{{Auth::user()->username}}</strong></span>
