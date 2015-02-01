<?php

class UserResource extends \Eloquent{
	protected $fillable = [ 'quantity' ];

	public static function createStartingResources( $user ){
		$resources = Resource::whereIn('name',["money","wood","tools","fish"])->get();
		foreach($resources as $resource){
			$userResource = new UserResource();
			$userResource->quantity = ($resource->name=='money'?1000:20);
			$userResource->resource()->associate($resource);
			$userResource->user()->associate($user);
			$userResource->save();
		}
	}

	public function resource(){
		return $this->belongsTo( 'Resource' );
	}

	public function user(){
		return $this->belongsTo( 'User' );
	}

	public function pay($amount){
		$this->quantity -= $amount;
		$this->save();
	}
}